import React from "react";
class LifeCycle7 extends React.Component{
    constructor(){
        super();
        console.log("Constructor Method Called");

        this.state = {
            counter : 1
        }
    }

    render(){
        console.log("Rendor Method Called");
        return <>
            Life Cycle Example in React JS
            <h1>Counter is {this.state.counter}</h1>
            <button onClick={()=>this.setState({counter: this.state.counter+1})}>Update</button>
        </>
    }

    componentDidMount(){
        console.log("Component Did Mount Method Called");
    }

    componentDidUpdate(){
        console.log("Component Did Update Method Called");
    }

    shouldComponentUpdate(){
        console.log("Should Component Update Method Called");
        return true;
    }

    componentWillUnmount(){
        console.log("Component Will Unmount Method Called");
    }
}

export default LifeCycle7;