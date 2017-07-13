export const projects = [
  {
    title: 'Note Taker',
    description: 'Responsive mobile first app for users to save and manage notes.  User authenication through Bcrypt passwords and Facebook login. Built using the Meteor framework with a React front end. Tested using Mocha and Enzyme.  View project with the links below.',
    keywords: ['React', 'Meteor', 'SCSS', 'MongoDB', 'Responsive Design', 'Mocha'],
    links: {
      github: 'https://github.com/ttalhouk/notes-app',
      web: "https://note-taker-ttalhouk.herokuapp.com/"
    },
    image: __dirname + 'projects/public/images/note-taker.png'
  },
  {
    title: 'Best Friend Tales',
    description: 'Web site developed to help find homes for pets and for pet owners to post topics and comment on each other\'s articles. Best Friend Tales is a Sinatra app using PostgreSQL database for storing user information and pet data for those users. The site integrates the Petfinder API and SendGrid for sending emails to the shelters.  View project with the links below.',
    keywords: ['Sinatra', 'Ruby', 'Materialize', 'PostgreSQL', '3rd party APIs'],
    links: {
      github: 'https://github.com/kelsonic/Best-Friend-Tales',
      web: "http://www.bftales.com"
    },
    image: __dirname + 'projects/public/images/bftales.png'
  },
  {
    title: 'Board Game Social',
    description: 'Web site developed to help allow users to track their boardgames and manage lending and borrowing of them to mutual friends. Built using Rails and a PostgreSQL database for storing user information and relationships. Connected to the Board Game Geek database for looking up titles and user collections.',
    keywords: ['Rails', 'Ruby', 'Bootstrap', 'PostgreSQL', '3rd party APIs', 'Divise'],
    links: {
      github: "https://github.com/ttalhouk/boardgame-social",
      web: "https://boardgame-social.herokuapp.com/"
    },
    image: __dirname + 'projects/public/images/bgs.png'
  },
  {
    title: 'Game On',
    description: 'Mobile application developed to help team organizers and team members manage recreational games.  Built using React Native for IOS for the front end and Rails backend API, it allows team managers to set up games and challenge other teams.  Through an RSVP system, teams that have enough RSVP\'s are paired together.  There is an in app chat room to chat with others on your team using Firebase. This was built over the course of a week as a final project where I was team lead of a group of 4. Work was done using Agile team concepts to work on bite size pieces of the project and bring it all together.',
    keywords: ['Rails', 'React Native', 'Decoupled App', 'PostgreSQL', 'Firebase'],
    links: {
      github:"https://github.com/ttalhouk/Game_On"
    },
    image: __dirname + 'projects/public/images/game-on.png'
  },
  {
    title: 'Exoplanet',
    description: 'Rails application built to demonstrate data visualization.  Using NASA exoplanet data and highcharts to create graphs, and charts to help bring the data into views allowing for meaningful conclusions to be drawn.  This was built as part of a lightning talk demo.',
    keywords: ['Rails', 'Highcharts', 'Data Visualization', 'CSV parsing'],
    links: {
      github:"https://github.com/kelsonic/exoplanet-analysis",
      web: "https://exoplanet-analysis.herokuapp.com/"
    },
    image: __dirname + 'projects/public/images/exo2.jpg'
  },
  {
    title: 'Noodle Doodle',
    description: 'A desktop Doodle application built using Javascript and Canvas. Allows users to make doodles using different colors and save them to their desktop.',
    keywords: ['Javascript', 'Canvas'],
    links: {
      web: __dirname + "resources/public/doodle"
    },
    image: __dirname + 'projects/public/images/noodle.png'
  }
]
