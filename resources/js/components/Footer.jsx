import { Facebook, Twitter, Instagram, Linkedin, Mail, MapPin, Phone } from 'lucide-react';

export default function Footer() {
  const currentYear = new Date().getFullYear();

  const footerLinks = [
    {
      title: 'Product',
      links: ['Live Streaming', 'Creator Economy', 'Entertainment', 'Digital Media'],
    },
    {
      title: 'Company',
      links: ['About Us', 'Blog', 'Press', 'Careers'],
    },
    {
      title: 'Resources',
      links: ['Documentation', 'API', 'Help Center', 'Community'],
    },
    {
      title: 'Legal',
      links: ['Privacy Policy', 'Terms of Service', 'Cookie Policy', 'Contact Us'],
    },
  ];

  const socialLinks = [
    { icon: Facebook, href: '#', label: 'Facebook' },
    { icon: Twitter, href: '#', label: 'Twitter' },
    { icon: Instagram, href: '#', label: 'Instagram' },
    { icon: Linkedin, href: '#', label: 'LinkedIn' },
  ];

  return (
    <footer id="footer" className="bg-black text-white">
      {/* Main Footer Content */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 mb-12">
          {/* Brand Section */}
          <div className="lg:col-span-1">
            <div className="mb-6">
              <div className="text-2xl font-bold">
                <span className="text-red-600">IDN</span> Media
              </div>
            </div>
            <p className="text-gray-400 text-sm leading-relaxed">
              Empowering Indonesia's digital future for Gen Z and Millennials.
            </p>
          </div>

          {/* Footer Links */}
          {footerLinks.map((section, index) => (
            <div key={index}>
              <h3 className="font-bold text-white mb-6">{section.title}</h3>
              <ul className="space-y-3">
                {section.links.map((link, linkIndex) => (
                  <li key={linkIndex}>
                    <a
                      href="#"
                      className="text-gray-400 hover:text-red-600 transition-colors text-sm"
                    >
                      {link}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        {/* Contact Info */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 py-12 border-t border-gray-800 mb-12">
          <div className="flex items-start gap-4">
            <MapPin className="text-red-600 flex-shrink-0 mt-1" size={20} />
            <div>
              <p className="font-semibold text-white mb-1">Address</p>
              <p className="text-gray-400 text-sm">Jakarta, Indonesia</p>
            </div>
          </div>
          <div className="flex items-start gap-4">
            <Phone className="text-red-600 flex-shrink-0 mt-1" size={20} />
            <div>
              <p className="font-semibold text-white mb-1">Phone</p>
              <p className="text-gray-400 text-sm">+62 (21) XXX-XXXX</p>
            </div>
          </div>
          <div className="flex items-start gap-4">
            <Mail className="text-red-600 flex-shrink-0 mt-1" size={20} />
            <div>
              <p className="font-semibold text-white mb-1">Email</p>
              <p className="text-gray-400 text-sm">hello@idnmedia.com</p>
            </div>
          </div>
        </div>

        {/* Social Links & Bottom */}
        <div className="flex flex-col sm:flex-row justify-between items-center pt-8 border-t border-gray-800">
          {/* Social Links */}
          <div className="flex gap-6 mb-6 sm:mb-0">
            {socialLinks.map((social, index) => {
              const IconComponent = social.icon;
              return (
                <a
                  key={index}
                  href={social.href}
                  aria-label={social.label}
                  className="text-gray-400 hover:text-red-600 transition-colors transform hover:scale-110"
                >
                  <IconComponent size={24} />
                </a>
              );
            })}
          </div>

          {/* Copyright */}
          <p className="text-gray-500 text-sm">
            © {currentYear} IDN Media. All rights reserved.
          </p>
        </div>
      </div>

      {/* Back to Top Button */}
      <div className="border-t border-gray-800 py-6">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <button
            onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
            className="w-full sm:w-auto mx-auto block px-6 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition-colors"
          >
            Back to Top
          </button>
        </div>
      </div>
    </footer>
  );
}
