import { Calendar, MapPin, Users, ArrowRight } from 'lucide-react';

export default function Events() {
  const events = [
    {
      id: 1,
      title: 'IDN Creator Summit 2026',
      date: 'May 20-22, 2026',
      location: 'Jakarta Convention Center',
      attendees: '5,000+',
      description: 'Annual summit for creators and industry leaders.',
      featured: true,
    },
    {
      id: 2,
      title: 'Gen Z Festival',
      date: 'June 2026',
      location: 'Bali',
      attendees: '10,000+',
      description: 'Festival for Gen Z creativity.',
      featured: false,
    },
    {
      id: 3,
      title: 'Digital Bootcamp',
      date: 'May 2026',
      location: 'Jakarta',
      attendees: '200+',
      description: 'Training for digital innovators.',
      featured: false,
    },
  ];

  const featured = events.find(e => e.featured);
  const others = events.filter(e => !e.featured);

  return (
    <section className="p-10 bg-black text-white">
      <h2 className="text-3xl font-bold mb-6 text-center">
        Events & Highlights
      </h2>

      {/* Featured */}
      {featured && (
        <div className="mb-10 p-6 bg-white/10 rounded-lg">
          <h3 className="text-xl font-bold mb-2">
            {featured.title}
          </h3>
          <p className="mb-4">{featured.description}</p>

          <div className="space-y-2 mb-4">
            <div className="flex gap-2 items-center">
              <Calendar size={16} /> {featured.date}
            </div>
            <div className="flex gap-2 items-center">
              <MapPin size={16} /> {featured.location}
            </div>
            <div className="flex gap-2 items-center">
              <Users size={16} /> {featured.attendees}
            </div>
          </div>

          <button className="bg-red-600 px-4 py-2 rounded flex items-center gap-2">
            Register <ArrowRight size={16} />
          </button>
        </div>
      )}

      {/* Other Events */}
      <div className="grid md:grid-cols-2 gap-6">
        {others.map(event => (
          <div key={event.id} className="p-6 bg-white/5 rounded-lg">
            <h4 className="text-lg font-bold mb-2">
              {event.title}
            </h4>

            <p className="text-gray-300 mb-3">
              {event.description}
            </p>

            <div className="text-sm space-y-1">
              <div className="flex gap-2 items-center">
                <Calendar size={14} /> {event.date}
              </div>
              <div className="flex gap-2 items-center">
                <MapPin size={14} /> {event.location}
              </div>
              <div className="flex gap-2 items-center">
                <Users size={14} /> {event.attendees}
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}