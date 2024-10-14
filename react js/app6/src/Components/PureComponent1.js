import { Component, PureComponent } from "react";

class PureComponent1 extends PureComponent {
    constructor() {
        super();

        this.state = {
            counter: 1
        }
    }

    render() {
        console.log("Render Method Called");
        return <><h1>Example of Pure Component</h1>
            <h1>Counter is {this.state.counter}</h1>
            {/* <button onClick={()=>this.setState({counter: this.state.counter+1})}>Update</button> */}
            <button onClick={()=>this.setState({counter: 1})}>Update</button>
        </>
    }
}

export default PureComponent1;