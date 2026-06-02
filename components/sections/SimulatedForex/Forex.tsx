import Image from "next/image";
import type { Locale } from "../../../lib/i18n/config";
import { getForexSymbols } from "../../../lib/symbols";
import Spreads from "../partials/Spreads";
import MenuSimulated from "../partials/MenuSimulated";

export default async function Forex({ lang }: { lang: Locale }) {
    const symbols = await getForexSymbols();

    return (
        <section className="symbols">
            <div className="container">
                <MenuSimulated lang={lang} />
                <div className="symbols__content currencies__content">
                    <Spreads />
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Simulated Currencies</h4>
                            <div className="inputs custom_inputs">
                                <div className="limit">
                                    <select name="" id="" defaultValue="10">
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div className="search">
                                    <input type="text" placeholder="Search..." />
                                </div>
                            </div>
                        </div>
                        <div className="table__content">
                            <div className="table__scroll col5">
                                <table>
                                    <thead>
                                        <tr>
                                            <th className="text-left">Simulated Symbols</th>
                                            <th className="text-left">Category</th>
                                            <th className="text-center">Contract Size</th>
                                            <th className="text-center">
                                                Margin Percent
                                                <br />
                                                Leverage Normal
                                            </th>
                                            <th className="text-center">Commission Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {symbols.length ? (
                                            symbols.map((symbol) => (
                                                <tr key={symbol.id}>
                                                    <td className="name-symbol text-left">
                                                        <span>( {symbol.symbolCode} )</span>
                                                        {symbol.name}
                                                    </td>
                                                    <td className="text-left">{symbol.category}</td>
                                                    <td className="text-center">{symbol.contractSize}</td>
                                                    <td className="text-center">{symbol.leverageNormal}</td>
                                                    <td className="text-center">{symbol.commissionType}</td>
                                                </tr>
                                            ))
                                        ) : (
                                            <tr>
                                                <td colSpan={5} className="text-center">
                                                    Not data
                                                </td>
                                            </tr>
                                        )}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Hour</h4>
                        </div>
                        <div className="table__content">
                            <div className="table__scroll col4">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Simulated Currencies</th>
                                            <th className="center">Weekday</th>
                                            <th className="center">Time</th>
                                            <th className="right">Sever Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>All</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="center">00:05 - 23:50</td>
                                            <td className="right">GMT +3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
