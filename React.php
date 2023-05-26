import React, { useState } from 'react';

import './App.css';

function App() {

  const [backgroundColor, setBackgroundColor] = useState('white');

  const toggleBackgroundColor = () => {

    const newColor = backgroundColor === 'white' ? 'lightgray' : 'white';

    setBackgroundColor(newColor);

  };

  return (

    <div className="App" style={{ backgroundColor }}>

      <h1>Background Color Toggler</h1>

      <button onClick={toggleBackgroundColor}>Toggle Background Color</button>

    </div>

  );

}

export default App;

