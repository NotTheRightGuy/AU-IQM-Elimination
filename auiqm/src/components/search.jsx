import React, { Component } from "react";

function Search() {
    return (
        <div className="search-bar">
            <div class="form-outline">
                <input
                    type="search"
                    id="form1"
                    class="form-control"
                    placeholder="Search Among Millions of Products"
                    aria-label="Search"
                />
            </div>
        </div>
    );
}

export default Search;
