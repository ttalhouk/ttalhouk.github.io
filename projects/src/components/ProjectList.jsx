import React from 'react';
import Project from './Project.jsx';
import {projects} from '../data/data';

class ProjectList extends React.Component {

  renderProjects() {
    return projects.map((project, idx) => {
      return (
          <Project key={idx} project={project} />
      )
    });
  }

  render () {
    console.log(projects);
    return (
      <div className='project-list--wrapper'>
        {this.renderProjects()}
      </div>
    )

  }
}

export default ProjectList;
