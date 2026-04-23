import { Calendar, ArrowRight } from 'lucide-react';

export default function News() {
  const newsItems = [
    {
      id: 1,
      title: 'IDN Reaches 10 Million Active Users',
      date: 'April 20, 2026',
      category: 'Milestone',
      description: 'Celebrating a major milestone as our platform reaches 10 million active users across Indonesia.',
      image: 'bg-gradient-to-br from-red-500 to-pink-600',
    },
    {
      id: 2,
      title: 'Creator Summit 2026: Empowering Digital Voices',
      date: 'April 15, 2026',
      category: 'Event',
      description: 'Join us for our annual summit featuring industry leaders, workshops, and networking opportunities.',
      image: 'bg-gradient-to-br from-purple-500 to-indigo-600',
    },
    {
      id: 3,
      title: 'New Creator Monetization Features Launched',
      date: 'April 10, 2026',
      category: 'Product',
      description: 'Enhanced tools for creators to maximize earnings through multiple revenue streams.',
      image: 'bg-gradient-to-br from-yellow-500 to-orange-600',
    },
    {
      id: 4,
      title: 'IDN Media Partners with International Brands',
      date: 'April 5, 2026',
      category: 'Partnership',
      description: 'Expanding our ecosystem through strategic partnerships with leading global tech companies.',
      image: 'bg-gradient-to-br from-blue-500 to-cyan-600',
    },
  ];

  return (
    <section id="news" className="py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section Header */}
        <div className="text-center mb-16">
          <p className="text-red-600 font-bold text-lg mb-4">LATEST UPDATES</p>
          <h2 className="section-title">
            News & Updates
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Stay informed about the latest developments, events, and innovations from IDN Media.
          </p>
        </div>

        {/* News Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {newsItems.map((item, index) => (
            <div
              key={item.id}
              className="group bg-white rounded-2xl overflow-hidden shadow-lg card-hover flex flex-col"
              style={{ animationDelay: `${index * 150}ms` }}
            >
              {/* Image Placeholder */}
              <div className={`h-48 ${item.image} relative overflow-hidden`}>
                <div className="absolute inset-0 flex items-center justify-center">
                  <div className="text-white text-center opacity-30">
                    <div className="text-6xl mb-2">📰</div>
                  </div>
                </div>
              </div>

              {/* Content */}
              <div className="p-8 flex flex-col flex-grow">
                {/* Category Badge */}
                <div className="inline-block mb-4">
                  <span className="px-4 py-1 bg-red-100 text-red-600 text-sm font-bold rounded-full">
                    {item.category}
                  </span>
                </div>

                {/* Title */}
                <h3 className="text-2xl font-bold text-black mb-4 group-hover:text-red-600 transition-colors">
                  {item.title}
                </h3>

                {/* Description */}
                <p className="text-gray-600 mb-6 flex-grow">
                  {item.description}
                </p>

                {/* Date & CTA */}
                <div className="flex items-center justify-between pt-6 border-t border-gray-200">
                  <div className="flex items-center gap-2 text-gray-500 text-sm">
                    <Calendar size={16} />
                    {item.date}
                  </div>
                  <button className="inline-flex items-center font-semibold text-red-600 hover:text-red-700 group/link">
                    Read More
                    <ArrowRight size={16} className="ml-2 group-hover/link:translate-x-1 transition-transform" />
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* View All Button */}
        <div className="text-center mt-12">
          <button className="btn-secondary">
            View All News
          </button>
        </div>
      </div>
    </section>
  );
}
