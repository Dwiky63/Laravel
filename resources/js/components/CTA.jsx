import { ArrowRight } from 'lucide-react';

export default function CTA() {
  const handleCareerClick = () => {
    document.getElementById('career').scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <section id="cta" className="py-24 bg-gradient-to-br from-black via-black to-gray-900 relative overflow-hidden">
      {/* Animated Background */}
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute top-10 right-10 w-80 h-80 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse" />
        <div className="absolute bottom-10 left-10 w-80 h-80 bg-red-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse animation-delay-2000" />
      </div>

      <div className="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 className="text-5xl md:text-6xl font-black text-white mb-6 leading-tight">
          Ready to Make an Impact?
        </h2>

        <p className="text-xl md:text-2xl text-gray-300 mb-12 max-w-2xl mx-auto leading-relaxed">
          Join thousands of creators, innovators, and community members in building a better Indonesia. Whether you're looking to create, consume, or invest—there's a place for you at IDN Media.
        </p>

        {/* CTA Buttons */}
        <div className="flex flex-col sm:flex-row justify-center gap-6 mb-12">
          <button className="btn-primary inline-flex items-center justify-center gap-2 group text-lg py-4 px-10">
            Join Our Community
            <ArrowRight size={24} className="group-hover:translate-x-1 transition-transform" />
          </button>
          <button
            onClick={handleCareerClick}
            className="btn-secondary inline-flex items-center justify-center gap-2 group text-lg py-4 px-10"
          >
            Explore Careers
            <ArrowRight size={24} className="group-hover:translate-x-1 transition-transform" />
          </button>
        </div>

        {/* Trust Message */}
        <p className="text-gray-400 text-sm">
          Trusted by 10M+ users and 50K+ creators across Indonesia
        </p>
      </div>
    </section>
  );
}
