import { Component } from "react";

class PropsDemo2 extends Component {
    constructor() {
        super();
    }

    render() {
        return <>
            <p>Props With Class Component</p>
            <h1>Welcome {this.props.username}</h1>
        </>
    }
}

export default PropsDemo2;