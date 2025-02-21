@extends('layouts.app')

@section('content')
<div class="content-container" style="height: 80vh; display: flex; flex-direction: column;">
    <div class="container mt-5" style="font-family: 'Raleway', sans-serif; overflow-y: auto; scrollbar-color: maroon white; flex-grow: 1;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">User Manual of IskoLAr</h2>
        </div>
        <hr class="my-4" style="height: 2px; background-color: gray; width: 100%">

        <!-- Section 1: Dashboard -->
        <h2 class="text-xl font-bold border-b border-maroon-400 pb-2 text-left">Section 1: Dashboard</h2>
        
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The Dashboard is the main area where you can monitor your current status on the site. Upon logging in, you’ll see your account details such as your Name, Email, and Role. 
            Your role—either Admin or Simple User—determines the features and data you can access.
        </p>

        <p class="text-gray-700 mt-2 max-w-2xl text-left">
            Depending on your role, you’ll have access to folders and files, each shown with the creation date and the user who created it. You can also track file activity and locate it within the folder structure.
        </p>

        <p class="text-gray-700 mt-2 max-w-2xl text-left">
            <strong>Admin Role:</strong> As an Admin, you have full access to file and folder management. You can view all activity logs, manage folder structures, and oversee file-sharing activities across users.
        </p>

        <p class="text-gray-700 mt-2 max-w-2xl text-left">
            <strong>Simple User Role:</strong> As a Simple User, you can view the files and folders assigned to you but with limited management capabilities. You can only view activity logs related to the files and folders you have access to.
        </p>

        <!-- Centered Image -->
        <div class="mt-6 text-center">
            <img src="{{ asset('images/user-manual.png') }}" 
                 alt="User Manual" 
                 class="rounded-lg shadow-md object-contain"
                 style="width: 800px; height: auto;">
        </div>
        <br>

        <!-- Features List -->
        <div class="mt-8">
            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <li><span class="font-bold text-xl mr-2">①</span> View account details (Name, Email, Role)</li>
                <li><span class="font-bold text-xl mr-2">②</span> Folder and file management with creation date and creator details</li>
                <li><span class="font-bold text-xl mr-2">③</span> Full access to activity logs for Admins, limited for Simple Users</li>
            </ul>

            <p class="mt-6 font-semibold text-left">Dashboard > User Role > Folder Management > Activity Logs</p>
            <p class="text-gray-600 text-left">Admin has full access to logs and folder management. Simple User has limited access.</p>
        </div>

        <!-- Section 2: Roles and Users Management -->
        <h2 class="text-xl font-bold border-b border-maroon-400 pb-2 text-left mt-8">Section 2: Roles and Users Management</h2>

        <!-- Roles Section -->
        <div class="role-section">
            <p class="text-gray-700 mt-4 max-w-2xl text-left">
                The **Roles Management** section is only accessible by Admin users and allows for full management of user roles within the system.
            </p>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                The system includes predefined roles like **Admin** and **User**. However, Admin users can also create additional custom roles as needed.
            </p>

            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <li><span class="font-bold text-xl mr-2">①</span> **View All Roles**: List all roles within the system, including Admin and User.</li>
                <li><span class="font-bold text-xl mr-2">②</span> **Add New Role**: Add custom roles as per the organization’s needs.</li>
                <li><span class="font-bold text-xl mr-2">③</span> **Select All**: Select multiple roles for actions like deletion or batch modifications.</li>
                <li><span class="font-bold text-xl mr-2">④</span> **Delete Selected Roles**: Admin can delete multiple roles at once after selecting them.</li>
            </ul>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                For each role, Admins can:
            </p>

            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <li><span class="font-bold text-xl mr-2">⑤</span> **View Role**: View detailed information about a specific role.</li>
                <li><span class="font-bold text-xl mr-2">⑥</span> **Edit Role**: Modify the permissions of a role as necessary.</li>
                <li><span class="font-bold text-xl mr-2">⑦</span> **Delete Role**: Remove the role from the system permanently.</li>
            </ul>
        </div>

        <!-- Users Section -->
        <div class="user-section mt-8">
            <p class="text-gray-700 mt-4 max-w-2xl text-left">
                The **User Management** section allows Admins to track, modify, and manage user roles directly from this page.
            </p>

            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <li><span class="font-bold text-xl mr-2">①</span> **Total Users**: Display the total number of users in the system.</li>
                <li><span class="font-bold text-xl mr-2">②</span> **Add New User**: Admin can add new users using the **Add New** button.</li>
                <li><span class="font-bold text-xl mr-2">③</span> **User List**: View the list of all users with details such as name, email, and role.</li>
                <li><span class="font-bold text-xl mr-2">④</span> **Search Bar**: Use the search bar to find a specific user.</li>
                <li><span class="font-bold text-xl mr-2">⑤</span> **Manage Users**: Admins can view, edit, and delete users.</li>
                <li><span class="font-bold text-xl mr-2">⑥</span> **Show Entries**: Admin can choose how many users to display at once using the Show Entries feature.</li>
                <li><span class="font-bold text-xl mr-2">⑦</span> **Modify User Role**: Admin can change a user’s role, such as from **User** to **Admin**, or vice versa.</li>
            </ul>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                Each user can be managed with three actions: **View**, **Edit**, and **Delete**.
            </p>
        </div>

        <!-- Step-by-Step Process -->
        <p class="mt-6 font-semibold text-left">Admin > Roles and Users > Add New Role/User</p>
        <p class="text-gray-600 text-left">Admins can manage roles and users by adding new roles, managing user permissions, and modifying user roles.</p>

        <!-- Section 3: Folders -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left">Section 3: Folders</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            In the **Folders** section, you can navigate through different folders that help in organizing your files.
            You can create, view, edit, and delete folders as needed to maintain an organized structure for your files.
        </p>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> **Search Folder**: Quickly search for folders by name to find the one you're looking for.</li>
            <li><span class="font-bold text-xl mr-2">②</span> **Edit Folder**: If needed, you can rename a folder using the **Edit** function.</li>
            <li><span class="font-bold text-xl mr-2">③</span> **Delete Folder**: If a folder is no longer needed, you can delete it permanently.</li>
            <li><span class="font-bold text-xl mr-2">④</span> **Add New Folder**: Click on the **Add New** button to create a new folder for more organized archiving.</li>
        </ul>
        
        <p class="mt-6 font-semibold text-left">Folder Management > Search > Edit > Delete > Add New Folder</p>

        <!-- Section 4: Files -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8">Section 4: Files</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The **Files** section lets you view a list of all files uploaded by users. You can search for files based on their filename, folder, date, and user.
        </p>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> **View Files**: The list of all uploaded files is displayed with their filename, folder, date, and the user who uploaded them.</li>
            <li><span class="font-bold text-xl mr-2">②</span> **Add New File**: Use the **Add New** button to upload a new file to the system.</li>
            <li><span class="font-bold text-xl mr-2">③</span> **Delete File**: Select files and use the **Delete** button to remove them. You can delete multiple files at once.</li>
            <li><span class="font-bold text-xl mr-2">④</span> **Download File**: Download files locally to your device when necessary.</li>
            <li><span class="font-bold text-xl mr-2">⑤</span> **Show Entries**: Modify the number of files displayed by selecting the number of entries you wish to see per page.</li>
        </ul>

        <p class="mt-6 font-semibold text-left">File Management > Upload > Delete > Download > Show Entries</p>

        <!-- Section 5: Trash -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8">Section 5: Trash</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The **Trash** section is where deleted files and folders are temporarily stored before being permanently removed from the system.
        </p>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> **Deleted Files**: View files that have been deleted. You can restore them if needed.</li>
            <li><span class="font-bold text-xl mr-2">②</span> **Deleted Folders**: View folders that have been deleted. You can restore them if needed.</li>
            <li><span class="font-bold text-xl mr-2">③</span> **Restore**: If a file or folder was deleted by accident, you can restore it back to its original location.</li>
            <li><span class="font-bold text-xl mr-2">④</span> **Delete Permanently**: If you no longer need a file or folder, you can choose to delete it permanently from the system to free up space.</li>
        </ul>

        <p class="mt-6 font-semibold text-left">Trash > Deleted Files > Deleted Folders > Restore > Permanently Delete</p>

        <!-- Section 6: Information -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left">Section 6: Information</h2>

        <!-- Subsection 1: About -->
        <h3 class="text-lg font-semibold text-left mt-4">1. About</h3>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            **IskoLAr** is a system designed to help the PUP (Polytechnic University of the Philippines) community in managing their files, folders, and secure information efficiently. The platform aims to simplify archiving, organizing, and retrieving important files for students, faculty, and staff alike.
            <br><br>
            The system brings numerous benefits such as easy access to files, collaborative sharing, folder management, and secure data handling. It enhances productivity and organization within the PUP community by providing a centralized digital space for all file-related needs.
        </p>
        <h3 class="text-lg font-semibold text-left mt-4">Creators</h3>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The **IskoLAr** system was created by a team of dedicated students and professionals who worked together to bring this idea to life. Each member has contributed their unique skills to ensure the system meets the needs of the PUP community.
            <br><br>
            <strong>Project Creators and Roles:</strong>
            <ul class="list-disc ml-6">
                <li><span class="font-semibold">John Lawrence Trinidad</span> - Project Manager</li>
                <li><span class="font-semibold">Acel Gabrielle</span> - Lead Developer</li>
                <li><span class="font-semibold">Vanica Lobusta</span> - Front-end/Backend Developer</li>
                <li><span class="font-semibold">Jermaine Jade De Guzman</span> - UI/UX Designer/Developer</li>
                <li><span class="font-semibold">Jiro Ivan Ybanez</span> - Logic Operator</li>
            </ul>
        </p>

        <!-- Subsection 2: User Manual -->
        <h3 class="text-lg font-semibold text-left mt-4">2. User Manual</h3>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The **User Manual** is your ultimate guide to the proper usage of the **IskoLAr** system. It contains instructions on how to navigate through the platform, manage folders, upload files, and utilize all the available features securely. If you have questions or need assistance with any function, this guide will help you get started and make the most of the system.
        </p>

        <!-- Section 7: Change Password -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8">Section 7: Change Password</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            For security purposes, it's important to regularly change your password to ensure your account remains secure. In this section, you can easily change your password following these steps:
        </p>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> **Input Current Password**: Enter your current password to verify your identity.</li>
            <li><span class="font-bold text-xl mr-2">②</span> **Input New Password**: Create a new password that is strong and unique.</li>
            <li><span class="font-bold text-xl mr-2">③</span> **Confirm New Password**: Re-enter your new password to confirm it.</li>
        </ul>
        <p class="mt-6 font-semibold text-left">Change Password Process: Current Password > New Password > Confirm New Password</p>

        <!-- Section 8: Log Out -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8">Section 8: Log Out</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The **Log Out** function is important for securing your account. Always ensure that you log out after using the system, especially if you are accessing it from a public or shared computer.
        </p>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> Click the **Log Out** button to end your session.</li>
            <li><span class="font-bold text-xl mr-2">②</span> Make sure to close your browser after logging out, especially if you're on a public network.</li>
        </ul>

        <p class="mt-6 font-semibold text-left">Log Out Function: Click Log Out to Secure Your Account</p>

        <!-- Section 9: Terms of Use and Privacy Statement -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8">Section 9: Terms of Use and Privacy Statement</h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            By using the **IskoLAr** system, you agree to the Terms of Use and Privacy Policy. These documents inform you of the terms and conditions under which the system operates, as well as how your data is handled.
            <br><br>
            Please review the Terms of Use and Privacy Statement thoroughly before continuing to use the system to ensure you understand your rights and responsibilities.
        </p>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <li><span class="font-bold text-xl mr-2">①</span> **Terms of Use**: Detailed terms that govern your use of the system.</li>
            <li><span class="font-bold text-xl mr-2">②</span> **Privacy Statement**: Explanation of how your personal and usage data is protected within the system.</li>
        </ul>

        <p class="mt-6 font-semibold text-left">Review Terms of Use > Privacy Statement</p>

    </div>
</div>
@endsection

@push('styles')
    <style>
        /* Custom Styles */
        .content-container {
            overflow-y: auto;
            height: 100vh;
            padding-right: 10px;
        }

        .container {
            padding-top: 80px;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-left {
            text-align: left;
        }

        .max-w-2xl {
            max-width: 42rem;
        }

        .role-section,
        .user-section {
            margin-top: 30px;
        }

        .role-section h3,
        .user-section h3 {
            font-size: 1.2rem;
            font-weight: bold;
            color: rgb(16, 79, 143);
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding-top: 50px;
            }

            .fw-bold {
                font-size: 1.5rem;
            }

            .text-left {
                font-size: 1rem;
            }

            .max-w-2xl {
                max-width: 100%;
            }

            .role-section, .user-section {
                margin-top: 20px;
            }

            .role-section h3,
            .user-section h3 {
                font-size: 1rem;
            }

            .mt-6 {
                margin-top: 16px;
            }

            img {
                width: 100%;
                height: auto;
            }
        }

        @media (max-width: 480px) {
            .fw-bold {
                font-size: 1.2rem;

            }

            .text-left {
                font-size: 0.9rem;
            }

            .max-w-2xl {
                max-width: 100%;
            }

            .role-section, .user-section {
                margin-top: 15px;
            }

            .role-section h3,
            .user-section h3 {
                font-size: 0.9rem;
            }

            img {
                width: 100%;
                height: auto;
            }

            ul li {
                font-size: 0.9rem;
            }
        }
    </style>
@endpush
