import React from 'react';
import { Palette, Wand2 } from 'lucide-react';

export default function Navbar({ onNavigate }) {
  return (
    <nav className="fixed w-full z-50 bg-black/80 backdrop-blur-md border-b border-gray-800">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          <div 
            className="flex items-center space-x-2 cursor-pointer"
            onClick={() => onNavigate('home')}
          >
            <Palette className="w-8 h-8 text-purple-500" />
            <span className="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
              ArtChain AI
            </span>
          </div>
          
          <div className="hidden md:flex items-center space-x-8">
            <button 
              onClick={() => onNavigate('home')}
              className="text-gray-300 hover:text-white transition-colors"
            >
              Home
            </button>
            <button 
              onClick={() => onNavigate('features')}
              className="text-gray-300 hover:text-white transition-colors"
            >
              Features
            </button>
            <button 
              onClick={() => onNavigate('gallery')}
              className="text-gray-300 hover:text-white transition-colors"
            >
              Gallery
            </button>
            <button 
              onClick={() => onNavigate('studio')}
              className="flex items-center space-x-2 text-gray-300 hover:text-white transition-colors"
            >
              <Wand2 className="w-5 h-5" />
              <span>AI Studio</span>
            </button>
            <button className="px-4 py-2 bg-purple-600 hover:bg-purple-700 rounded-lg transition-all">
              Connect Wallet
            </button>
          </div>

          <button className="md:hidden p-2 text-gray-400 hover:text-white">
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </nav>
  );
}