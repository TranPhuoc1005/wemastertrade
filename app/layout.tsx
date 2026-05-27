import "./styles.css";
import "./responsive.css";

export default function RootLayout({ children }: { children: React.ReactNode }) {
    return (
        <html suppressHydrationWarning>
            <body>
                {children}
            </body>
        </html>
    );
}

