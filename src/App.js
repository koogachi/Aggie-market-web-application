import React, { Component } from 'react';
import './App.css';
import Login from './components/Login';

class App extends Component{
  
  render(){
    return(
    <div style={{width:"600px", margin:"10"}} className="App">
      <form>
      < Login/>
      <div style={{alignSelf:"center"}} >
      <p style={{color:"white"}} >Username</p>

      <textarea
        className="form-control"
        placeholder={"Enter username"}
      />

      </div>
      <div style={{alignSelf:"center"}} >
      <p style={{color:"white"}} >Password</p>

      <textarea
        className="form-control"
        placeholder={"Enter Password"}
      />
      </div>
      <div>
      <button style={{right:""}}>
      Login
      </button>

      </div>
      

      </form>
    </div>
  );
}
}
export default App;
