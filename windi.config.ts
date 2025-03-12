import { defineConfig } from 'windicss/helpers';

export default defineConfig({
  safelist: [
    'row',
    'container',
    ...Array.from({ length: 12 }, (_, i) => `col-${i + 1}`), // Matches col-1, col-2, col-sm-6, col-lg-12, etc.
    'animate__animated',
    'animate__fadeInUp',
    'animate__fadeInRight',
    'animate__fadeInLeft',
    'owl-carousel',
    'owl-theme',
    'item',
  ],
});
