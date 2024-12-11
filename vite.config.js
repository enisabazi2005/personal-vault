import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; // Only if you're using Vue
import path from 'path';

export default defineConfig({
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './resources/js'), // Optional alias for JS files
    },
  },
  css: {
    postcss: './postcss.config.cjs', // Specify your PostCSS config here
  },
  plugins: [
    vue(), // Only if you're using Vue
  ],
});
