"use client";

import React, { useState, useEffect } from "react";
import type { PayoutDictionary } from "../../../lib/i18n/payoutTranslations";
import { getYoutubePlaylist, type VideoItem } from "../../../services/wordpress/payout";

interface PlaylistConfig {
    name: string;
    id: string;
}

interface MeetProps {
    lang: string;
    dict: PayoutDictionary["meet"];
}

export default function Meet({ lang, dict }: MeetProps) {
    const shortLang = lang.slice(0, 2).toLowerCase();

    // Playlists mapping
    const playlists: Record<string, PlaylistConfig> = {
        ja: { name: "Japan", id: "PLASM7soIohx36ygEYk7nnwyCbysjh05kY" },
        bn: { name: "Bangladesh", id: "PLASM7soIohx05fwuFmJ_BinEgnTq1DdvY" },
        in: { name: "India", id: "PLASM7soIohx073JwgZzfGKpeP7jOVG2__" },
        id: { name: "Indonesia", id: "PLASM7soIohx18y0fiUfTneI_FzACUjd_-" },
        th: { name: "Thailand", id: "PLASM7soIohx3Ws6rlKIQxf4K7U1D9n3fc" },
        ms: { name: "Malaysia", id: "PLASM7soIohx1ciRRoPGI18rd7olszjdsI" },
        uz: { name: "Uzbekistan", id: "PLASM7soIohx3k2dfsSKadUPCyedR3Vj-u" },
        es: { name: "LATAM", id: "PLASM7soIohx2LEmwQSwb6IsnCPzBSJyHk" },
        pt: { name: "LATAM", id: "PLASM7soIohx2LEmwQSwb6IsnCPzBSJyHk" }
    };

    const playlistLocal = playlists[shortLang];

    const [activeTab, setActiveTab] = useState<"global" | "local">("global");

    // Global videos state
    const [globalVideos, setGlobalVideos] = useState<VideoItem[]>([]);
    const [globalLimit, setGlobalLimit] = useState(12);
    const [globalLoading, setGlobalLoading] = useState(true);
    const [globalBtnLoading, setGlobalBtnLoading] = useState(false);

    // Local videos state
    const [localVideos, setLocalVideos] = useState<VideoItem[]>([]);
    const [localLimit, setLocalLimit] = useState(12);
    const [localLoading, setLocalLoading] = useState(true);
    const [localBtnLoading, setLocalBtnLoading] = useState(false);

    // Fetch Global Playlist
    useEffect(() => {
        async function fetchGlobal() {
            try {
                const data = await getYoutubePlaylist();
                setGlobalVideos(Array.isArray(data) ? data : []);
            } catch (err) {
                console.error("Error fetching global playlist:", err);
            } finally {
                setGlobalLoading(false);
            }
        }
        fetchGlobal();
    }, []);

    // Fetch Local Playlist
    useEffect(() => {
        if (!playlistLocal) {
            setLocalLoading(false);
            return;
        }

        async function fetchLocal() {
            try {
                const data = await getYoutubePlaylist(playlistLocal.id);
                setLocalVideos(Array.isArray(data) ? data : []);
            } catch (err) {
                console.error("Error fetching local playlist:", err);
            } finally {
                setLocalLoading(false);
            }
        }
        fetchLocal();
    }, [playlistLocal]);

    // Handle dynamic loading more
    const handleLoadMoreGlobal = () => {
        setGlobalBtnLoading(true);
        setTimeout(() => {
            setGlobalLimit(prev => prev + 8);
            setGlobalBtnLoading(false);
        }, 300);
    };

    const handleLoadMoreLocal = () => {
        setLocalBtnLoading(true);
        setTimeout(() => {
            setLocalLimit(prev => prev + 8);
            setLocalBtnLoading(false);
        }, 300);
    };

    return (
        <section id="meet" className="meet">
            <div className="container">
                <div className="title center">
                    <div dangerouslySetInnerHTML={{ __html: dict.titleHtml }} />
                    {playlistLocal && (
                        <div className="btn not_icon center">
                            <p
                                className={`tab ${activeTab === "global" ? "active" : ""}`}
                                onClick={() => setActiveTab("global")}
                                role="button"
                                tabIndex={0}
                                onKeyDown={(e) => e.key === "Enter" && setActiveTab("global")}
                            >
                                <a><span>Global</span></a>
                            </p>
                            <p
                                className={`tab ${activeTab === "local" ? "active" : ""}`}
                                onClick={() => setActiveTab("local")}
                                role="button"
                                tabIndex={0}
                                onKeyDown={(e) => e.key === "Enter" && setActiveTab("local")}
                            >
                                <a><span>{playlistLocal.name}</span></a>
                            </p>
                        </div>
                    )}
                </div>

                {/* Global playlist tab */}
                <div
                    className={`meet__content--tab ${activeTab === "global" ? "active" : ""}`}
                    style={{ display: activeTab === "global" ? "block" : "none" }}
                >
                    <div id="global-container" className="meet__content">
                        {globalLoading && <p className="loader" id="youtube-loader"></p>}
                        {globalVideos.slice(0, globalLimit).map((video, index) => (
                            <div
                                key={`${video.videoId}-${index}`}
                                className="item lightbox-item"
                                data-youtube-id={video.videoId}
                            >
                                <div className="meet__video">
                                    {/* eslint-disable-next-line @next/next/no-img-element */}
                                    <img
                                        loading="lazy"
                                        src={video.thumbnail}
                                        alt={video.title}
                                    />
                                </div>
                                <div className="meet__title">
                                    {/* eslint-disable-next-line @next/next/no-img-element */}
                                    <img
                                        src="/images/meet_wmt_logo.png"
                                        alt="WMT Logo"
                                        width={24}
                                        height={24}
                                    />
                                    <h4>{video.title}</h4>
                                </div>
                            </div>
                        ))}
                    </div>

                    {!globalLoading && globalVideos.length > globalLimit && (
                        <div
                            id="loadmore-global"
                            className="btn center loadmore-global"
                            onClick={handleLoadMoreGlobal}
                            role="button"
                            tabIndex={0}
                            onKeyDown={(e) => e.key === "Enter" && handleLoadMoreGlobal()}
                        >
                            {globalBtnLoading ? (
                                <p className="loader" style={{ display: "block" }}></p>
                            ) : (
                                <p className="btn__viewmore"><span>{dict.loadMore}</span></p>
                            )}
                        </div>
                    )}
                </div>

                {/* Local playlist tab */}
                {playlistLocal && (
                    <div
                        className={`meet__content--tab ${activeTab === "local" ? "active" : ""}`}
                        style={{ display: activeTab === "local" ? "block" : "none" }}
                    >
                        <div id="local-container" className="meet__content">
                            {localLoading && <p className="loader" id="youtube-loader-local"></p>}
                            {localVideos.slice(0, localLimit).map((video, index) => (
                                <div
                                    key={`${video.videoId}-${index}`}
                                    className="item lightbox-item"
                                    data-youtube-id={video.videoId}
                                >
                                    <div className="meet__video">
                                        {/* eslint-disable-next-line @next/next/no-img-element */}
                                        <img
                                            loading="lazy"
                                            src={video.thumbnail}
                                            alt={video.title}
                                        />
                                    </div>
                                    <div className="meet__title">
                                        <h4>{video.title}</h4>
                                    </div>
                                </div>
                            ))}
                        </div>

                        {!localLoading && localVideos.length > localLimit && (
                            <div
                                id="loadmore-local"
                                className="btn center loadmore-local"
                                onClick={handleLoadMoreLocal}
                                role="button"
                                tabIndex={0}
                                onKeyDown={(e) => e.key === "Enter" && handleLoadMoreLocal()}
                            >
                                {localBtnLoading ? (
                                    <p className="loader" style={{ display: "block" }}></p>
                                ) : (
                                    <p className="btn__viewmore"><span>{dict.loadMore}</span></p>
                                )}
                            </div>
                        )}
                    </div>
                )}
            </div>
        </section>
    );
}
