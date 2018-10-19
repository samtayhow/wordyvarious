import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Play extends Component {
    render() {
        return (
            <div class="ui full-width" data-role="play">
                <div class="controlPanel">
                    <div class="nowPlaying"><i class="fas fa-play"></i> Now playing: <a href={"/@" + list.author + "/" + list.title }>{ list.title }</a></div>
                    <div class="controls">
                        <ul>
                            <li><i class="fas fa-clipboard"></i> Copy</li>
                            <li><i class="fas fa-star"></i> Like</li>
                            <li><i class="fas fa-random"></i> Shuffle</li>
                        </ul>
                    </div>
                </div> 
                <div class="wrapper">
                    <div id="gameContent"></div>
                    <div class="refresh"><i class="fas fa-sync" id="nextGame" onclick="nextGame()"></i></div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('playWrapper')) {
    ReactDOM.render(<Play />, document.getElementById('playWrapper'));
}