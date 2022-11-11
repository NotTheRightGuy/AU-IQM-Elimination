import React from "react";
import Item from "./items";

import data from "../data.json";

window.addEventListener("click", (e) => {
    let parent = e.target.parentElement;
    if (parent.className == "items") {
        const link = parent.firstChild.innerText;
        window.open(`https://amazon.com${link}`, "_blank");
    }
});

function Container() {
    return (
        <div className="container">
            {data.map((item) => (
                <Item
                    image={item.image}
                    title={item.title}
                    price={item.price}
                    url={item.url}
                />
            ))}
        </div>
    );
}

export default Container;
