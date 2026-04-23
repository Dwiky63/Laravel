import { useState } from 'react';
import { Menu, X } from 'lucide-react';

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false);

  const navLinks = ['Home', 'About', 'Products', 'News', 'Career'];

  const handleScroll = (id) => {
    const element = document.getElementById(id.toLowerCase());
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
      setIsOpen(false);
    }
  };

  return (
    <nav className="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-md shadow-lg">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-20">
          {/* Logo */}
          <div className="flex-shrink-0 group cursor-pointer" onClick={() => handleScroll('home')}>
            <div className="text-2xl font-bold text-black">
              <span className="text-red-600">IDN</span>
              <span className="hidden sm:inline"> Media</span>
            </div>
          </div>

          {/* Desktop Navigation */}
          <div className="hidden md:flex items-center space-x-1">
            {navLinks.map((link) => (
              <button
                key={link}
                onClick={() => handleScroll(link)}
                className="px-4 py-2 text-sm font-semibold text-black hover:text-red-600 transition-colors duration-200 relative group"
              >
                {link}
                <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-red-600 group-hover:w-full transition-all duration-300" />
              </button>
            ))}
          </div>

          {/* CTA Button */}
          <div className="hidden md:block">
            <button className="btn-primary">
              Join Us
            </button>
          </div>

          {/* Mobile menu button */}
          <button
            onClick={() => setIsOpen(!isOpen)}
            className="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors"
          >
            {isOpen ? (
              <X size={24} className="text-black" />
            ) : (
              <Menu size={24} className="text-black" />
            )}
          </button>
        </div>

        {/* Mobile Navigation */}
        {isOpen && (
          <div className="md:hidden pb-4 animate-slideInDown">
            <div className="flex flex-col space-y-2">
              {navLinks.map((link) => (
                <button
                  key={link}
                  onClick={() => handleScroll(link)}
                  className="block w-full text-left px-4 py-2 text-sm font-semibold text-black hover:bg-red-100 hover:text-red-600 rounded-lg transition-colors"
                >
                  {link}
                </button>
              ))}
              <button className="btn-primary w-full mt-2">
                Join Us
              </button>
            </div>
          </div>
        )}
      </div>
    </nav>
  );
}
