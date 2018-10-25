import React, { Component } from 'react';
import ReactDOM from 'react-dom';



export default class WordList extends Component {
    render() {

        var list = {
            "address": "/@" + this.props.author + "/" + this.props.slug,
            "id": this.props.id,
            "title": this.props.title,
            "author": this.props.author,
            "dateCreated": this.props.dateCreated,
            "dateModified": this.props.dateModified,
            "description": this.props.description,
            "tags": this.props.tags.split(" "),
            "faves": this.props.faves,
            "shares": this.props.shares,
            "slug": this.props.slug,
            "wordsColumnLength": 0,
            "words": this.props.words.split(" ")
        }

        // Parsing
        list.words.sort();
        list.wordsColumnLength = Math.ceil(list.words.length * 0.33333333);
        list.wordsOrdered = {
            "column1": [],
            "column2": [],
            "column3": []
        };
        for (var i = 0; i < list.wordsColumnLength; i++) { 
            list.wordsOrdered.column1.push(list.words[i]);
        }
        for (var i = list.wordsColumnLength; i < (list.wordsColumnLength * 2); i++) { 
            list.wordsOrdered.column2.push(list.words[i]);
        }
        for (var i = (list.wordsColumnLength * 2); i < list.words.length; i++) { 
            list.wordsOrdered.column3.push(list.words[i]);
        }
        
        if(this.props.format == "unabridged"){
            return (
                <div className="full-width" data-role="card" data-list-id={ this.props.id }>
                    <header data-role="card-header">
                        <h1>{ list.title }</h1>
                        <div className="byline">
                            <div className="group">
                                <i className="fas fa-user"></i> <a href={ "/@" + list.author }>{ list.author }</a> <i className="fas fa-at"></i> <span className="sr-only">created on</span> { list.dateCreated }
                            </div>
                            <div className="group">
                                <i className="fas fa-link"></i> <input value={ "wordyvario.us/@" + list.author + "/" + list.slug } className="share" readOnly /> <button className="small"><i className="fas fa-copy"></i></button>
                            </div>
                            <div className="group">
                                <a href={ list.address + "/play" }><button className="small"><i className="fas fa-gamepad"></i> Play with this list</button></a>
                            </div>
                        </div>
                    </header>
                    <main>
                        <section className="description">{ list.description }</section>
                        <section>
                            <h4>Words <span className="muted">({ list.words.length })</span></h4>
                            <div className="words">
                                <ul className="col">                                
                                    {list.wordsOrdered.column1.map(function(word, index){
                                        return <li key={ index }>{word}</li>;
                                    })}
                                </ul>
                                <ul className="col">                                
                                    {list.wordsOrdered.column2.map(function(word, index){
                                        return <li key={ index }>{word}</li>;
                                    })}
                                </ul>
                                <ul className="col">                                
                                    {list.wordsOrdered.column3.map(function(word, index){
                                        return <li key={ index }>{word}</li>;
                                    })}
                                </ul>
                            </div>
                        </section>
                    </main>
                    <footer data-role="card-footer">
                        <div className="byline"><i className="fas fa-star"></i> { list.faves } <span className="sr-only">faves</span> <i className="fas fa-share"></i> { list.shares } <span className="sr-only">shares</span></div>
                        <div className="byline"><i className="fas fa-tags"></i> <span className="sr-only">tags:</span>
                            <ul className="tags">
                                {list.tags.map(function(tag, index){
                                    return <li key={ index } className="tag"><a href={ "/tagged/" + tag }>{ tag }</a></li>;
                                })}
                            </ul>
                        </div>
                    </footer>
                </div>
            );
        }
        
        if(this.props.format == "summary"){
            return (
                <div className="full-width" data-role="card">
                    <header data-role="card-header">
                        <h3><a href={ list.address }>{ list.title }</a></h3>
                        <div className="byline"><i className="fas fa-user"></i> <a href={"/@" + list.author}>{list.author}</a> <i className="fas fa-at"></i> <span className="sr-only">created on</span> {list.dateCreated}</div>
                    </header>
                    <main>
                        <section className="description">{list.description}</section>
                    </main>
                    <footer data-role="card-footer">
                        <div className="byline"><i className="fas fa-star"></i> {list.faves} <span className="sr-only">faves</span> <i className="fas fa-share"></i> {list.shares} <span className="sr-only">shares</span></div>
                        <div className="byline"><i className="fas fa-tags"></i> <span className="sr-only">tags:</span>
                            <ul className="tags">
                                {list.tags.map(function(tag, index){
                                    return <li key={ index } className="tag"><a href={ "/tagged/" + tag }>{ tag }</a></li>;
                                })}
                            </ul>
                        </div>
                    </footer>
                </div>
            );
        }

        if(this.props.format == "snippet"){
            return (
                <div className="full-width" data-role="card" data-list-id={ list.id }>
                    <main>
                        <h3><a href={list.address}>{list.title}</a></h3>
                        <div className="byline"><i className="fas fa-user"></i> <a href={"/@" + list.author}>{list.author}</a> <i className="fas fa-at"></i> <span className="sr-only">created on</span> {list.dateCreated} <i className="fas fa-star"></i> {list.faves} <span className="sr-only">faves</span> <i className="fas fa-share"></i> {list.shares} <span className="sr-only">shares</span></div>
                        <div className="byline"><i className="fas fa-tags"></i> <span className="sr-only">tags:</span>
                            <ul className="tags">
                                {list.tags.map(function(tag, index){
                                    return <li key={ index } className="tag"><a href={ "/tagged/" + tag }>{ tag }</a></li>;
                                })}
                            </ul>
                        </div>
                    </main>
                </div>
            );
        }
        
        
        if(this.props.format == "line"){
            return (
                <div className="list snippet">
                    <a href={list.address}><span className="list title">{list.title}</span></a>
                    <div className="byline">by <a href={"/@" + list.author}>{list.author}</a></div>
                    <div className="byline"><i className="fas fa-star"></i> <a>{list.faves}</a> <span className="sr-only">faves</span> <i className="fas fa-share"></i> <a>{list.shares}</a> <span className="sr-only">shares</span></div>
                </div>
            );
        }

    }
}

if (document.getElementById('view1')) {
    ReactDOM.render(<WordList list="1" format={"unabridged"} />, document.getElementById('view1'));
}

if (document.getElementById('spotlight')) {
    ReactDOM.render(<WordList list="1" format={"summary"} />, document.getElementById('spotlight'));
}

if (document.getElementById('view3')) {
    ReactDOM.render(<WordList list="1" format={"snippet"} />, document.getElementById('view3'));
}

if (document.getElementById('view4')) {
    ReactDOM.render(<WordList list="1" format={"line"} />, document.getElementById('view4'));
}