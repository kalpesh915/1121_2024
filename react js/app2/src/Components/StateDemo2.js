import { Component } from "react";

class StateDemo2 extends Component{
    constructor(){
        super();
        this.state = {
            count: 1
        }
    }

    render(){
        return <>
            <h1>State in Class Component</h1>
            <h1>Count is {this.state.count}</h1>
            <button onClick={()=>this.setState({
                count: this.state.count + 1
            })}>Update</button>
        </>
    }
}

export default StateDemo2;