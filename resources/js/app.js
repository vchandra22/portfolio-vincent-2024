import './bootstrap';
import 'flowbite';
import './aos';

import { SpeedInsights } from "@vercel/speed-insights/next";

// Initialize and use Speed Insights
const speed = new SpeedInsights({
  url: window.location.href, // Current page URL
});

speed.track();

import { inject } from '@vercel/analytics';
inject();
