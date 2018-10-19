import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
    render() {
        var loggedIn = true;
        return (
            <div className=" container wrapper">
                <div className="logo">
                    <a href="/"><img src="img/logo.svg"/></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="create">Create</a></li>
                        <li><a href="play">Play</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="search" id="search-link">Search</a></li>
                    </ul>
                </nav>
                <div className="search-bar">
                    <input></input><button className="small"><i className="fas fa-search"></i></button>
                </div>
                <div className="user-controls">
                    <a href="account"><i className="fas fa-user-circle"></i> {user.username}</a>       
                </div>
            </div>  
        );
    }
}

if (document.querySelector('header[data-role="global"]')) {
    ReactDOM.render(<Header />, document.querySelector('header[data-role="global"]'));
}