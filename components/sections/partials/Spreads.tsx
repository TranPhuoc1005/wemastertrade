"use client";

import Image from "next/image";
import React, { useRef } from "react";

const platformUrl = "https://download.terminal.free/cdn/web/wemastertrade.ltd/mt5/wemastertrade5setup.exe";
const onlineWebUrl = "https://online.ugfx.com/terminal/";

const spreadAccounts = [
    {
        title: "SEE FOR YOURSELF !",
        rows: [
            { label: "Login ID", value: "974896" },
            { label: "Password", value: "WeMasterTrade@1" },
            { label: "Server", value: "WeMasterTrade-Virtual" },
        ],
    },
    {
        title: "FIXED SPREAD & NO COMMISSION",
        rows: [
            { label: "Login ID", value: "997076" },
            { label: "Password", value: "WeMasterTrade@1" },
            { label: "Server", value: "WeMasterTrade-Virtual" },
        ],
    },
];

export default function Spreads() {
    return (
        <section className="spreads">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Problems</p>
                    <h3>
                        <span>The Best Spreads </span>
                        <br className="sp" />
                        In The Industry
                    </h3>
                </div>
                <div className="boxcopy">
                    {spreadAccounts.map((account) => (
                        <div className="item" key={account.title}>
                            <h4>
                                <span>{account.title}</span>
                            </h4>
                            <div className="cnt">
                                <div className="boxcopy__list">
                                    {account.rows.map((row) => (
                                        <div className="row" key={`${account.title}-${row.label}`}>
                                            <p className="row__txt">{row.label}</p>
                                            <CopyField value={row.value} />
                                        </div>
                                    ))}
                                </div>
                                <div className="btn btn__download center">
                                    <p>
                                        <a href={platformUrl} target="_blank" rel="noreferrer">
                                            <span>Download Platform</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href={onlineWebUrl} className="btn_w">
                                            <span>Online Web</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}

function CopyField({ value }: { value: string }) {
    const inputRef = useRef<HTMLInputElement>(null);

    async function copyValue() {
        if (navigator.clipboard?.writeText) {
            await navigator.clipboard.writeText(value);
            return;
        }

        inputRef.current?.select();
        document.execCommand("copy");
    }

    return (
        <p className="row__input custom_inputs">
            <button className="copy_btn" onClick={copyValue} type="button" aria-label={`Copy ${value}`}>
                <Image loading="lazy" src="/images/copy_btn.png" width={40} height={40} alt="" />
            </button>
            <input ref={inputRef} type="text" value={value} readOnly />
        </p>
    );
}
