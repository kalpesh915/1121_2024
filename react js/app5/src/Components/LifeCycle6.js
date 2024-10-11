import React from "react";
class LifeCycle6 extends React.Component{
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
        // return false;
        //return true;

        if(this.state.counter >= 10){
            return true;
        }else{
            return false;
        }
    }
}

export default LifeCycle6;