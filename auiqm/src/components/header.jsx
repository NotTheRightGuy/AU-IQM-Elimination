import React, { Component } from "react";
import "../../node_modules/bootstrap/dist/css/bootstrap.css";
import Search from "./search";

function Header() {
    return (
        <div className="header">
            <div className="website-info">
                {/* <div className="Logo">
                    <button>
                        <img src="../assets/shopoholic.png" alt="" />
                    </button>
                </div> */}
                <div className="website-name">Shopoholic</div>
            </div>
            <Search />
            <div className="order-info">
                <div className="order-requests">
                    <button>Order & Returns</button>
                </div>

                <div className="cart">
                    <button>
                        <img src="https://img.icons8.com/ios-glyphs/30/null/shopping-cart--v1.png" />
                    </button>
                </div>

                <div className="Profile">
                    <button>
                        <img
                            className="profile-pic"
                            src="https://img.icons8.com/ios-filled/50/null/guest-male--v1.png"
                        />
                    </button>
                </div>
            </div>
        </div>
    );
}
export default Header;
