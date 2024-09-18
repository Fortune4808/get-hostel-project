/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./account/**/*.{php,js}", "./admin/**/*.{php,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'background': 'linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(../../all-images/body-pix/cover-pix.jpg);',
        'profile-background': 'linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../../all-images/body-pix/profile-bg.png);',
      },
      screens: {
        'h-custom-screen-m': {'max': '850px'},
        'h-custom-screen-ml': {'max': '1000px'},
      },
      boxShadow: {
        'left-border': '7px 1px 0px -3px #be1d1d inset',
        'profile-border': ' 0px 0px 5px 5px #e2e2e2',
        'picture-box-border': '2px 2px 0px 0px #e2e2e2',
        'table-box-border': ' 0px 0px 4px 2px #e2e2e2',
      },
    },
  },
  plugins: [],
}
