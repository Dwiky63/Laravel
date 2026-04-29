import { Play, Users, Sparkles, BookOpen } from 'lucide-react';

export default function Products() {
  const products = [
    {
      icon: Play,
      title: 'Live Streaming',
      description: 'Real-time entertainment and engagement with interactive features for creators and audiences.',
      color: 'from-red-500 to-pink-600',
    },
    {
      icon: Users,
      title: 'Creator Economy',
      description: 'Comprehensive tools and monetization solutions for creators to build sustainable careers.',
      color: 'from-purple-500 to-indigo-600',
    },
    {
      icon: Sparkles,
      title: 'Entertainment Hub',
      description: 'Premium content, exclusive shows, and entertainment experiences for modern audiences.',
      color: 'from-yellow-500 to-orange-600',
    },
    {
      icon: BookOpen,
      title: 'Digital Media',
      description: 'Breaking news, trending stories, and original content tailored for Gen Z.',
      color: 'from-blue-500 to-cyan-600',
    },
  ];

  return (
    <section id="products" className="py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section Header */}
        <div className="text-center mb-16">
          <p className="text-red-600 font-bold text-lg mb-4">OUR ECOSYSTEM</p>
          <h2 className="section-title">
            Discover Our Products
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Comprehensive solutions designed for creators, consumers, and everyone in between.
          </p>
        </div>

        {/* Products Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {products.map((product, index) => {
            const IconComponent = product.icon;
            return (
              <div
                key={index}
                className="group bg-white rounded-2xl overflow-hidden card-hover shadow-lg"
                style={{ animationDelay: `${index * 150}ms` }}
              >
                {/* Icon Background */}
                <div className={`h-40 bg-gradient-to-br ${product.color} relative overflow-hidden`}>
                  <div className="absolute inset-0 flex items-center justify-center">
                    <IconComponent
                      size={80}
                      className="text-white opacity-30 group-hover:scale-110 transition-transform duration-500"
                    />
                  </div>
                  <div className="absolute top-0 right-0 w-20 h-20 bg-white opacity-0 group-hover:opacity-10 rounded-full blur-2xl transition-opacity duration-300" />
                </div>

                {/* Content */}
                <div className="p-8">
                  <div className="flex items-center gap-3 mb-4">
                    <IconComponent size={32} className={`text-transparent bg-clip-text bg-gradient-to-r ${product.color}`} />
                  </div>
                  <h3 className="text-2xl font-bold text-black mb-3">
                    {product.title}
                  </h3>
                  <p className="text-gray-600 leading-relaxed">
                    {product.description}
                  </p>

                  {/* CTA Link */}
                  <button className="mt-6 inline-flex items-center font-semibold text-red-600 hover:text-red-700 group/link">
                    Learn More
                    <span className="ml-2 transform group-hover/link:translate-x-2 transition-transform">
                      →
                    </span>
                  </button>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
}
