import React, { Component } from "react";

class ClassDemo1 extends Component{
    constructor(){
        super(); // call constructor of Component Class
    }

    render(){
        // return <h1>Welcome to example of Class Demo</h1>
        return React.createElement("h1", "", "Welcome to JSX");
    }
}

export default ClassDemo1;