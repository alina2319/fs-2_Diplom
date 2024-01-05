import React from 'react';
import ReactDOM from 'react-dom';
import Application from './Application';

require('./bootstrap');

ReactDOM.render(
    <React.StrictMode>
        <Application />
    </React.StrictMode>,
    document.getElementById('root'),
);
