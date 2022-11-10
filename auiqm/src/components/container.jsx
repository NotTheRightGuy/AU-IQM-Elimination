import React, { Component } from "react";
import Item from "./items";

import data from "../data.json";

function Container() {
    return (
        <div className="container">
            {data.map((item) => (
                <Item
                    image={item.image}
                    title={item.title}
                    price={item.price}
                    reviews={item.price}
                    ratings={item.ratings}
                />
            ))}
        </div>
    );
}

export default Container;
