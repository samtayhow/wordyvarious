import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import ReturnArrow from './returnArrow';

export default class Footer extends Component {
    render() {
        const returnArrow = this.props.returnarrow;
        return (
            <div className="wrapper">
                { returnArrow && <ReturnArrow/> }
                <main>
                    <div className="tabular">
                        <div className="logo">
                            <a href="index.html">
                                <img src="img/logo_white.svg"/>
                            </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </nav>                            
                    <ul className="social">
                        <li><a href=""><i className="fab fa-facebook"></i></a></li>
                        <li><a href=""><i className="fab fa-twitter"></i></a></li>
                        <li><a href=""><i className="fab fa-tumblr"></i></a></li>
                        <li><a href=""><i className="fab fa-instagram"></i></a></li>
                    </ul>
                </div> 
               <div id="copyright">© 2018 wordyvarious, LLC</div>
            </main>
          </div>
        );
    }
}

if (document.querySelector('footer[data-role="global"]')) {
    ReactDOM.render(<Footer returnarrow={true} />, document.querySelector('footer[data-role="global"]'));
}