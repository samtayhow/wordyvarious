import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ReturnArrow extends Component {
    render() {
        const returnArrow = this.props.returnarrow;
        return (
            <a href="#top">
                <div className="return-arrow">
                    <i className="fas fa-angle-double-up"></i>
                </div>    
            </a>   
        ); 
    }
}