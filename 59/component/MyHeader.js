import React from "react";
import wallpaper from'../wallpaper.jpg';
function MyHeader(){
    return(<img src={wallpaper}
         style={{width:'100%', height:'100px'}}/>);
}
export default MyHeader;