import { Component } from "react";

class PropsDemo5 extends Component{
    constructor(){
        super();
    }

    render(){
        return <>
            <p>Props with Event in Class Component</p>
            <h1>Welcome {this.props.user.fname} {this.props.user.lname}</h1>
        </>
    }
}

export default PropsDemo5;