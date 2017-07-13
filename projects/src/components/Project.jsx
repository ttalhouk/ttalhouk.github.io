import React, { PropTypes } from 'react';
import ReactModal from 'react-modal';

class Project extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      showModal: false
    };
    this.handleOpenModal = this.handleOpenModal.bind(this);
    this.handleCloseModal = this.handleCloseModal.bind(this);
  }

  handleOpenModal () {
    this.setState({ showModal: true });
  }

  handleCloseModal () {
    this.setState({ showModal: false });
  }
  renderLinks(links) {

    return Object.keys(links).map((link) => {
      return (
        <a key={link}
          className={`btn btn-primary button--${link} button--links`} href={links[link]}>View on {link}</a>
      )
    })
  }

  render () {
    const {title, description, links, image, keywords} = this.props.project;
    return (
      <div >
        <div onClick={this.handleOpenModal} className='project-list--item'>
          <h2  >{title}</h2>
          <div className='screen'>
            <img src={image} className='project-list--image' alt={`${title} image`} />

          </div>
        </div>


        <ReactModal
          isOpen={this.state.showModal}
          contentLabel="Project Details"
          onRequestClose={this.handleCloseModal}
          className="boxed-view__box"
          overlayClassName="boxed-view boxed-view--modal"
        >
          <div className="modal--wrapper">
            <div className="modal--image" style={{backgroundImage: `url('${image}')`}}>
            </div>
            <div className="fader">
              <div className="modal--content">
                <h3>{title}</h3>
                <p>{description}</p>
                <small>{keywords.join(', ')}</small>
              </div>
            </div>
          </div>
          <div className="modal--controls">
            <div className='project--links'>
              {this.renderLinks(links)}
            </div>
            <button className='btn btn-secondary button--links' onClick={this.handleCloseModal}>Close</button>
          </div>

        </ReactModal>
      </div>
    )
  }
}

export default Project;
