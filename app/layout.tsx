import "./styles.css";
import "./responsive.css";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import AppProviders from "../components/providers/AppProviders";

export default function RootLayout({ children }: { children: React.ReactNode }) {
    return (
        <html suppressHydrationWarning>
            <body>
                <AppProviders>{children}</AppProviders>
            </body>
        </html>
    );
}
