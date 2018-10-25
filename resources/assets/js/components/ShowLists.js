import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import WordList from './wordList.js';

export default class ShowLists extends Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoaded: false,
      wordLists: []
    };
  }

  componentDidMount() {
    fetch("/api/lists")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            wordLists: result
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
    const { error, isLoaded, wordLists } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Loading...</div>;
    } else {
      console.log(wordLists);
      return (
        <div>
          {wordLists.map(wordList => (
            <WordList id={wordList.id} tags={wordList.tags} faves={wordList.faves} shares={wordList.shares} slug={wordList.slug} title={wordList.title} author={wordList.author_name} dateCreated={wordList.created_at} dateModified={wordList.updated_at} description={wordList.description} words={wordList.words} format={"snippet"} />
          ))}
        </div>
      );
    }
  }
}


if (document.getElementById('ShowLists')) {
    ReactDOM.render(<ShowLists></ShowLists>, document.getElementById('ShowLists'));
}
