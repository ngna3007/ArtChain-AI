import React, { useState } from 'react';
import { Wand2, History, Save, Download, Share2, Sparkles, Palette, RefreshCw, Trash2 } from 'lucide-react';

interface PromptHistory {
  id: string;
  prompt: string;
  timestamp: string;
  style: string;
}

export default function AIStudio() {
  const [prompt, setPrompt] = useState('');
  const [selectedStyle, setSelectedStyle] = useState('');
  const [isGenerating, setIsGenerating] = useState(false);
  const [promptHistory, setPromptHistory] = useState<PromptHistory[]>([
    {
      id: '1',
      prompt: 'A cyberpunk city at night with neon signs and flying cars',
      timestamp: '2 minutes ago',
      style: 'Neon Dreams'
    },
    {
      id: '2',
      prompt: 'Abstract representation of human consciousness',
      timestamp: '15 minutes ago',
      style: 'Digital Surrealism'
    }
  ]);

  const unlockedStyles = [
    {
      id: '1',
      name: 'Neon Dreams',
      artist: 'Sarah Chen',
      thumbnail: 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80'
    },
    {
      id: '2',
      name: 'Digital Surrealism',
      artist: 'Emma Watson',
      thumbnail: 'https://images.unsplash.com/photo-1549490349-8643362247b5?auto=format&fit=crop&q=80'
    }
  ];

  const handleGenerate = () => {
    if (!prompt || !selectedStyle) return;
    
    setIsGenerating(true);
    // Simulate AI generation
    setTimeout(() => {
      setIsGenerating(false);
      setPromptHistory(prev => [{
        id: Date.now().toString(),
        prompt,
        timestamp: 'Just now',
        style: selectedStyle
      }, ...prev]);
    }, 3000);
  };

  const handleClearHistory = () => {
    setPromptHistory([]);
  };

  return (
    <div className="min-h-screen bg-gradient-to-b from-gray-900 to-black text-white pt-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Main Generation Area */}
          <div className="lg:col-span-2 space-y-8">
            <div className="bg-gray-800/50 rounded-xl p-8">
              <h2 className="text-3xl font-bold mb-6 flex items-center gap-2">
                <Wand2 className="w-8 h-8 text-purple-400" />
                AI Studio
              </h2>
              
              {/* Style Selection */}
              <div className="mb-6">
                <label className="block text-sm font-medium text-gray-300 mb-2">Select Style</label>
                <div className="grid grid-cols-2 sm:grid-cols-3 gap-4">
                  {unlockedStyles.map(style => (
                    <button
                      key={style.id}
                      onClick={() => setSelectedStyle(style.name)}
                      className={`relative rounded-lg overflow-hidden aspect-video group ${
                        selectedStyle === style.name ? 'ring-2 ring-purple-500' : ''
                      }`}
                    >
                      <img 
                        src={style.thumbnail} 
                        alt={style.name}
                        className="w-full h-full object-cover"
                      />
                      <div className="absolute inset-0 bg-black/60 flex items-center justify-center">
                        <div className="text-center">
                          <p className="font-semibold">{style.name}</p>
                          <p className="text-sm text-gray-400">{style.artist}</p>
                        </div>
                      </div>
                    </button>
                  ))}
                </div>
              </div>

              {/* Prompt Input */}
              <div className="mb-6">
                <label className="block text-sm font-medium text-gray-300 mb-2">Prompt</label>
                <div className="relative">
                  <textarea
                    value={prompt}
                    onChange={(e) => setPrompt(e.target.value)}
                    placeholder="Describe the artwork you want to generate..."
                    className="w-full h-32 bg-gray-900/50 rounded-lg p-4 text-white placeholder-gray-500 focus:ring-2 focus:ring-purple-500 focus:outline-none"
                  />
                  <div className="absolute right-2 bottom-2">
                    <button
                      onClick={handleGenerate}
                      disabled={!prompt || !selectedStyle || isGenerating}
                      className={`px-4 py-2 m-3 rounded-lg flex items-center gap-2 ${
                        isGenerating ? 'bg-purple-600/50' : 'bg-purple-600 hover:bg-purple-700'
                      } transition-all`}
                    >
                      {isGenerating ? (
                        <>
                          <RefreshCw className="w-5 h-5 animate-spin" />
                          Generating...
                        </>
                      ) : (
                        <>
                          <Sparkles className="w-5 h-5" />
                          Generate
                        </>
                      )}
                    </button>
                  </div>
                </div>
              </div>

              {/* Generated Image Display */}
              <div className="aspect-square rounded-lg bg-gray-900/50 flex items-center justify-center">
                {isGenerating ? (
                  <div className="text-center">
                    <RefreshCw className="w-12 h-12 animate-spin mx-auto mb-4 text-purple-400" />
                    <p className="text-gray-400">Creating your masterpiece...</p>
                  </div>
                ) : (
                  <div className="text-center text-gray-400">
                    <Palette className="w-12 h-12 mx-auto mb-4" />
                    <p>Your generated artwork will appear here</p>
                  </div>
                )}
              </div>

              {/* Action Buttons */}
              <div className="flex gap-4 mt-4">
                <button className="flex-1 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg flex items-center justify-center gap-2 transition-all">
                  <Save className="w-5 h-5" />
                  Save
                </button>
                <button className="flex-1 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg flex items-center justify-center gap-2 transition-all">
                  <Download className="w-5 h-5" />
                  Download
                </button>
                <button className="flex-1 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg flex items-center justify-center gap-2 transition-all">
                  <Share2 className="w-5 h-5" />
                  Share
                </button>
              </div>
            </div>
          </div>

          {/* Prompt History Sidebar */}
          <div className="bg-gray-800/50 rounded-xl p-6">
            <div className="flex items-center justify-between mb-6">
              <h3 className="text-xl font-semibold flex items-center gap-2">
                <History className="w-5 h-5 text-purple-400" />
                Prompt History
              </h3>
              <button
                onClick={handleClearHistory}
                className="text-gray-400 hover:text-white transition-colors"
              >
                <Trash2 className="w-5 h-5" />
              </button>
            </div>
            <div className="space-y-4">
              {promptHistory.map((item) => (
                <div key={item.id} className="bg-gray-900/50 rounded-lg p-4">
                  <p className="text-sm mb-2">{item.prompt}</p>
                  <div className="flex items-center justify-between text-xs text-gray-400">
                    <span>{item.style}</span>
                    <span>{item.timestamp}</span>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}