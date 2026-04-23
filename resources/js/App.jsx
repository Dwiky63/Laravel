import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';
import '../css/app.css';

// Mount React app
ReactDOM.createRoot(document.getElementById('app')).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
import React, { useEffect } from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import About from './components/About';
import Products from './components/Products';
import News from './components/News';
import Events from './components/Events';
import CTA from './components/CTA';
import Footer from './components/Footer';

export default function App() {
  useEffect(() => {
    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';
    
    return () => {
      document.documentElement.style.scrollBehavior = 'auto';
    };
  }, []);

  return (
    <div className="w-full overflow-hidden">
      {/* Navbar - Fixed at top */}
      <Navbar />

      {/* Main Content */}
      <main className="relative">
        <Hero />
        <About />
        <Products />
        <News />
        <Events />
        <CTA />
      </main>

      {/* Footer */}
      <Footer />
    </div>
  );
}
