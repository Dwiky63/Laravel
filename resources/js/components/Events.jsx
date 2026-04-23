import { Calendar, MapPin, Users } from 'lucide-react';

export default function Events() {
  const events = [
    {
      id: 1,
      title: 'IDN Creator Summit 2026',
      date: 'May 20-22, 2026',
      location: 'Jakarta Convention Center',
      attendees: '5,000+',
      description: 'Annual summit bringing together creators, investors, and industry leaders.',
      image: 'bg-gradient-to-br from-red-600 to-pink-600',
      featured: true,
    },
    {
      id: 2,
      title: 'Gen Z Entertainment Festival',
      date: 'June 10-12, 2026',
      location: 'Bali, Indonesia',
      attendees: '10,000+',
      description: 'Three days of live performances, workshops, and community celebrations.',
      image: 'bg-gradient-to-br from-purple-600 to-indigo-600',
      featured: false,
    },
    {
      id: 3,
      title: 'Digital Innovation Bootcamp',
      date: 'May 25-29, 2026',
      location: 'IDN Media HQ',
      attendees: '200+',
      description: 'Intensive 5-day program for aspiring digital entrepreneurs and creators.',
      image: 'bg-gradient-to-br from-yellow-600 to-orange-600',
      featured: false,
    },
  ];

  const featuredEvent = events.find(e => e.featured);
  const upcomingEvents = events.filter(e => !e.featured);

  return (
    <section id="events" className="py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section Header */}
        <div className="text-center mb-16">
          <p className="text-red-600 font-bold text-lg mb-4">UPCOMING</p>
          <h2 className="section-title">
            Events & Highlights
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Join us at major events and be part of the IDN community movement.
          </p>
        </div>

        {/* Featured Event */}
        {featuredEvent && (
          <div className="mb-16 group">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center bg-white rounded-2xl overflow-hidden shadow-2xl">
              {/* Image */}
              <div className={`h-96 lg:h-full ${featuredEvent.image} relative overflow-hidden`}>
                <div className="absolute inset-0 flex items-center justify-center">
                  <div className="text-white text-center opacity-20">
                    <div className="text-9xl mb-4">🎉</div>
                  </div>
                </div>
                <div className="absolute top-4 right-4 bg-red-600 text-white px-6 py-2 rounded-full font-bold text-lg">
                  Featured
                </div>
              </div>

              {/* Content */}
              <div className="p-12">
                <h3 className="text-4xl font-bold text-black mb-4">
                  {featuredEvent.title}
                </h3>
                <p className="text-gray-600 text-lg mb-8">
                  {featuredEvent.description}
                </p>

                {/* Event Details */}
                <div className="space-y-4 mb-8">
                  <div className="flex items-center gap-4">
                    <Calendar className="text-red-600" size={24} />
                    <div>
                      <p className="text-sm text-gray-500">Date</p>
                      <p className="text-lg font-semibold text-black">{featuredEvent.date}</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <MapPin className="text-red-600" size={24} />
                    <div>
                      <p className="text-sm text-gray-500">Location</p>
                      <p className="text-lg font-semibold text-black">{featuredEvent.location}</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <Users className="text-red-600" size={24} />
                    <div>
                      <p className="text-sm text-gray-500">Expected Attendees</p>
                      <p className="text-lg font-semibold text-black">{featuredEvent.attendees}</p>
                    </div>
                  </div>
                </div>

                {/* CTA */}
                <button className="btn-primary">
                  Get Tickets
                </button>
              </div>
            </div>
          </div>
        )}

        {/* Other Events */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {upcomingEvents.map((event, index) => (
            <div
              key={event.id}
              className="bg-white rounded-2xl overflow-hidden shadow-lg card-hover"
              style={{ animationDelay: `${index * 150}ms` }}
            >
              {/* Image */}
              <div className={`h-40 ${event.image} relative overflow-hidden`}>
                <div className="absolute inset-0 flex items-center justify-center text-white text-center opacity-20">
                  <div className="text-6xl">🎊</div>
                </div>
              </div>

              {/* Content */}
              <div className="p-8">
                <h3 className="text-2xl font-bold text-black mb-4">
                  {event.title}
                </h3>

                <div className="space-y-3 mb-6">
                  <div className="flex items-center gap-2 text-gray-600">
                    <Calendar size={18} className="text-red-600" />
                    {event.date}
                  </div>
                  <div className="flex items-center gap-2 text-gray-600">
                    <MapPin size={18} className="text-red-600" />
                    {event.location}
                  </div>
                  <div className="flex items-center gap-2 text-gray-600">
                    <Users size={18} className="text-red-600" />
                    {event.attendees} attendees
                  </div>
                </div>

                <p className="text-gray-600 mb-6">
                  {event.description}
                </p>

                <button className="btn-secondary w-full">
                  Learn More
                </button>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
