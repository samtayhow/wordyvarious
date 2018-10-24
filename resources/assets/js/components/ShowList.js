import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import WordList from './wordList.js';

export default class ShowList extends Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoaded: false,
      wordList: []
    };
  }

  componentDidMount() {
      
    // get or assign slug
    if (document.getElementById('ShowList')) {
        var slug = document.getElementById('ShowList').getAttribute('data-slug');
        var author = document.getElementById('ShowList').getAttribute('data-author');
    } else {
        var author = 'janes';
        var slug = 'fairytales';
    }

    fetch("/api/@" + author + "/" + slug)
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            wordList: result
          });
        },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      )
  }

  render() {
    const { error, isLoaded, wordList } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Loading...</div>;
    } else {
        
        // get author name
        if (document.getElementById('ShowList')) {
            wordList.author = document.getElementById('ShowList').getAttribute('data-author');
        }
        
      console.log(wordList);
      return (
        <WordList id={wordList.id} tags={wordList.tags} faves={wordList.faves} shares={wordList.shares} slug={wordList.slug} title={wordList.title} author={wordList.author} dateCreated={wordList.created_at} dateModified={wordList.updated_at} description={wordList.description} words={wordList.words} format={"unabridged"} />
      );
    }
  }
}


if (document.getElementById('ShowList')) {
    ReactDOM.render(<ShowList>z</ShowList>, document.getElementById('ShowList'));
}
