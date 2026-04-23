export default function About() {
  const values = [
    {
      icon: '🚀',
      title: 'Innovation',
      description: 'Pioneering digital solutions for modern Indonesia',
    },
    {
      icon: '👥',
      title: 'Community',
      description: 'Building a thriving ecosystem for creators and users',
    },
    {
      icon: '💡',
      title: 'Empowerment',
      description: 'Giving young people the tools to make an impact',
    },
    {
      icon: '🌟',
      title: 'Excellence',
      description: 'Delivering premium digital experiences',
    },
  ];

  return (
    <section id="about" className="py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section Header */}
        <div className="text-center mb-16">
          <p className="text-red-600 font-bold text-lg mb-4">ABOUT IDN</p>
          <h2 className="section-title">
            Empowering Indonesia's Digital Future
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            IDN Media is more than a platform—it's a movement. We're committed to empowering Gen Z and Millennials through cutting-edge digital media, live streaming, creator economy solutions, and entertainment experiences that matter.
          </p>
        </div>

        {/* Values Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {values.map((value, index) => (
            <div
              key={index}
              className="p-8 bg-gray-50 rounded-2xl card-hover group"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              <div className="text-4xl mb-4 transform group-hover:scale-125 transition-transform duration-300">
                {value.icon}
              </div>
              <h3 className="text-2xl font-bold text-black mb-3">
                {value.title}
              </h3>
              <p className="text-gray-600">
                {value.description}
              </p>
            </div>
          ))}
        </div>

        {/* Key Stats */}
        <div className="mt-20 bg-gradient-to-r from-black to-gray-800 rounded-2xl p-12 text-white">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
              <p className="text-5xl font-bold text-red-600 mb-2">10M+</p>
              <p className="text-gray-300">Active Users</p>
            </div>
            <div>
              <p className="text-5xl font-bold text-red-600 mb-2">50K+</p>
              <p className="text-gray-300">Content Creators</p>
            </div>
            <div>
              <p className="text-5xl font-bold text-red-600 mb-2">24/7</p>
              <p className="text-gray-300">Live Entertainment</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
