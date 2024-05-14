import { createBrowserRouter, RouterProvider, Route } from "react-router-dom";
// import PageTemplate from "./page/PageTemplate";
import Accueil from "./Page/Accueil";
import PageTemplate from "./Page/PageTemplate";
import Interview from "./Page/Interview";
import Erreur from "./Page/Erreur";
import InterviewDetail from "./Page/InterviewDetail";
import Podcast from "./Page/Podcast";
import Blog from "./Page/Blog";
import PodcastDetail from "./Page/PodcastDetail";
import BlogDetail from "./Page/BlogDetail";
import About from "./Page/About";
import Contact from "./Page/Contact";

const router = createBrowserRouter([
    {
        path: '/',
        element: (
            <PageTemplate />
        ),
        children: [
            {
                path: '',
                element: <Accueil />
            },
            {
                path: 'interview',
                element: <Interview />,
                children: [
                    {
                        path: 'interview/:interviewId',
                        element: <InterviewDetail />
                    },
                    {
                        path: '*',
                        element: <Erreur />
                    }
                ]
            },
            {
                path: 'podcast',
                element: <Podcast />,
                children: [
                    {
                        path: 'podcast/:podcastId',
                        element: <PodcastDetail />
                    },
                    {
                        path: '*',
                        element: <Erreur />
                    }
                ]
            },
            {
                path: 'blog',
                element: <Blog />,
                children: [
                    {
                        path: 'blog/:blogId',
                        element: <BlogDetail />
                    },
                    {
                        path: '*',
                        element: <Erreur />
                    }
                ]
            },
            {
                path: 'about',
                element: <About />,
                children: [
                    {
                        path: 'interview/:interviewid',
                        element: <InterviewDetail />
                    },
                    {
                        path: '*',
                        element: <Erreur />
                    }
                ]
            },
            {
                path: 'contact',
                element: <Contact />,
            },
            {
                path: '*',
                element: <Erreur />
            }
        ]
    },
    {
        path: '/',
        element: <Accueil />
    }
]);

function AppRouter() {
    return <RouterProvider router={router} />;
}

export default AppRouter;
