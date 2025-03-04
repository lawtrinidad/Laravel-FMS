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
                <span class="font-bold text-xl mr-2">①</span> View account details (Name, Email, Role).<br>
                <span class="font-bold text-xl mr-2">②</span> Folder and file management with creation date and creator details.<br>
                <span class="font-bold text-xl mr-2">③</span> Full access to activity logs for Admins, limited for Simple Users. <br>
            </ul>

            <p class="mt-6 font-semibold text-left"><strong>Dashboard > User Role > Folder Management > Activity Logs</strong></p>
            <p class="text-gray-600 text-left">Admin has full access to logs and folder management. Simple User has limited access.</p>
        </div>

        <!-- Section 2: Roles and Users Management -->
        <h2 class="text-xl font-bold border-b border-maroon-400 pb-2 text-left mt-8"><strong>Section 2: Roles and Users Management</strong></h2>

        <!-- Roles Section -->
        <div class="role-section">
            <p class="text-gray-700 mt-4 max-w-2xl text-left">
                The <strong><em>Roles Management</em></strong> section is only accessible by <strong>Admin</strong> users and allows for full management of user roles within the system.
            </p>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                The system includes predefined roles like <strong>Admin</strong> and <strong>User</strong>. However, Admin users can also create additional custom roles as needed.
            </p>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/rolesusers.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 400px; height: auto;">
        </div>
        <br>

            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <span class="font-bold text-xl mr-2">①</span> <strong>View All Roles</strong>: List all roles within the system, including Admin and User. <br>
                <span class="font-bold text-xl mr-2">②</span> <strong>Add New Role</strong>: Add custom roles as per the organization’s needs.<br>
                <span class="font-bold text-xl mr-2">③</span> <strong>Select All</strong>: Select multiple roles for actions like deletion or batch modifications.<br>
                <span class="font-bold text-xl mr-2">④</span> <strong>Delete Selected Roles</strong>: Admin can delete multiple roles at once after selecting them. <br>
            </ul>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                For each role, Admins can:
            </p>

            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <span class="font-bold text-xl mr-2">⑤</span> <strong>View Role</strong>: View detailed information about a specific role. <br>
                <div class="mt-6 text-center">
            <img src="{{ asset('images/roles-view.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
                <span class="font-bold text-xl mr-2">⑥</span> <strong>Edit Role</strong>: Modify the permissions of a role as necessary.<br>
                <div class="mt-6 text-center">
            <img src="{{ asset('images/roles-edit.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
                <span class="font-bold text-xl mr-2">⑦</span> <strong>Delete Role</strong>: Remove the role from the system permanently. A confirmation modal will appear before proceeding.<br>
                <div class="mt-6 text-center">
            <img src="{{ asset('images/roles-delete.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 500px; height: auto;">
            </div>
            <br>
            </ul>
        </div>

        <!-- Users Section -->
        <div class="user-section mt-8">
            <p class="text-gray-700 mt-4 max-w-2xl text-left">
                The <strong><em>User Management</em></strong> section allows Admins to track, modify, and manage user roles directly from this page.
            </p>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/users.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
            <ul class="mt-6 space-y-2 text-gray-800 text-left">
                <span class="font-bold text-xl mr-2">①</span> <strong>Total Users </strong>: Display the total number of users in the system. <br>
                <span class="font-bold text-xl mr-2">②</span>  <strong>Add New User </strong>: Admin can add new users using the  <strong>Add New </strong> button.<br>
                <span class="font-bold text-xl mr-2">③</span>  <strong>User List </strong>: View the list of all users with details such as name, email, and role.<br>
                <span class="font-bold text-xl mr-2">④</span>  <strong>Search Bar </strong>: Use the search bar to find a specific user.<br>
                <span class="font-bold text-xl mr-2">⑤</span>  <strong>Manage Users </strong>: Admins can view, edit, and delete users.<br>
                <span class="font-bold text-xl mr-2">⑥</span>  <strong>Show Entries </strong>: Admin can choose how many users to display at once using the Show Entries feature.<br>
                <span class="font-bold text-xl mr-2">⑦</span>  <strong>Modify User Role </strong>: Admin can change a user’s role, such as from  <strong>User </strong> to  <strong>Admin </strong>, or vice versa.<br>
            </ul>

            <p class="text-gray-700 mt-2 max-w-2xl text-left">
                Each user can be managed with three actions:  <strong>View </strong>,  <strong>Edit </strong>, and  <strong>Delete </strong>.
            </p>
        </div>

        <!-- Step-by-Step Process -->
        <p class="mt-6 font-semibold text-left"> <strong>Admin > Roles and Users > Add New Role/User</strong> </p>
        <p class="text-gray-600 text-left">Admins can manage roles and users by adding new roles, managing user permissions, and modifying user roles.</p>

        <!-- Section 3: Folders -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left"> <strong>Section 3: Folders </strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            In the  <strong><em>Folders</em> </strong> section, you can navigate through different folders that help in organizing your files.
            You can create, view, edit, and delete folders as needed to maintain an organized structure for your files.
        </p>
        <div class="mt-6 text-center">
            <img src="{{ asset('images/folder.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 700px; height: auto;">
            </div>
            <br>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <span class="font-bold text-xl mr-2">①</span>  <strong>Search Folder </strong>: Quickly search for folders by name to find the one you're looking for.<br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/Folder search.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 450px; height: auto;">
            </div>
            <br>
            <span class="font-bold text-xl mr-2">②</span>  <strong>Edit Folder</strong>: If needed, you can rename a folder using the <strong>Edit</strong> function.<br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/folder edit.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 450px; height: auto;">
            </div>
            <br>
            <span class="font-bold text-xl mr-2">③</span>  <strong>Delete Folder</strong>: If a folder is no longer needed, you can delete it permanently. A confirmation modal will appear before proceeding.<br><br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/folder delete.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 450px; height: auto;">
            </div>
            <br>
            <span class="font-bold text-xl mr-2">④</span>  <strong>Add New Folder</strong>: Click on the <strong>Add New</strong> button to create a new folder for more organized archiving.<br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/folder add.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 250px; height: auto;">
            </div>
            <br>
        </ul>
        
        <p class="mt-6 font-semibold text-left"><strong>Folder Management > Search > Edit > Delete > Add New Folder</strong></p>

        <!-- Section 4: Files -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8"><strong>Section 4: Files</strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The <strong><em>Files</em></strong> section lets you view a list of all files uploaded by users. You can search for files based on their filename, folder, date, and user.
        </p>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <span class="font-bold text-xl mr-2">①</span> <strong>View Files</strong>: The list of all uploaded files is displayed with their filename, folder, date, and the user who uploaded them.<br>
                        <div class="mt-6 text-center">
            <img src="{{ asset('images/files1.JPG') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
        </ul>
            <span class="font-bold text-xl mr-2">②</span> <strong>Add New File</strong>: Use the <strong>Add New</strong> button to upload a new file to the system.<br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/files2.JPG') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 700px; height: auto;">
            </div>
            <br>
        </ul>
            <span class="font-bold text-xl mr-2">③</span> <strong>Delete File</strong>: Select files and use the <strong>Delete</strong> button to remove them. You can delete multiple files at once.<br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/files3.JPG') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
        </ul>
            <span class="font-bold text-xl mr-2">④</span> <strong>Download File</strong>: Download files locally to your device when necessary.<br>
            <span class="font-bold text-xl mr-2">⑤</span> <strong>Show Entries</strong>: Modify the number of files displayed by selecting the number of entries you wish to see per page.<br>
        </ul>

        <p class="mt-6 font-semibold text-left"><strong>File Management > Upload > Delete > Download > Show Entries</strong></p>

        <!-- Section 5: Trash -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8"><strong>Section 5: Trash</strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The "Trash" section is where deleted files and folders are temporarily stored before being permanently removed from the system.
        </p>

        <ul class="mt-6 space-y-2 text-gray-800 text-left">
        <div class="mt-6 text-center">
            <img src="{{ asset('images/TRASH1.JPG') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
            <span class="font-bold text-xl mr-2">①</span> <strong>Deleted Files</strong>: View files that have been deleted. You can restore them if needed.<br>
            <span class="font-bold text-xl mr-2">②</span> <strong>Deleted Folders</strong>: View folders that have been deleted. You can restore them if needed.<br>
            <span class="font-bold text-xl mr-2">③</span> <strong>Restore</strong>: If a file or folder was deleted by accident, you can restore it back to its original location.<br>
            <span class="font-bold text-xl mr-2">④</span> <strong>Delete Permanently</strong>: If you no longer need a file or folder, you can choose to delete it permanently from the system to free up space.<br>
        </ul>

        <p class="mt-6 font-semibold text-left"><strong>Trash > Deleted Files > Deleted Folders > Restore > Permanently Delete</strong></p>

        <!-- Section 6: Information -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left"><strong>Section 6: Information</strong></h2>

        <!-- Subsection 1: About -->
        <h3 class="text-lg font-semibold text-left mt-4"><strong>1. About</strong></h3>
        <div class="mt-6 text-center">
            <img src="{{ asset('images/about about.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
        <strong><em>IskoLAr</em></strong> is a system designed to help the PUP (Polytechnic University of the Philippines) community in managing their files, folders, and secure information efficiently. The platform aims to simplify archiving, organizing, and retrieving important files for students, faculty, and staff alike.
            <br><br>
            The system brings numerous benefits such as easy access to files, collaborative sharing, folder management, and secure data handling. It enhances productivity and organization within the PUP community by providing a centralized digital space for all file-related needs.
        </p>
        <h3 class="text-lg font-semibold text-left mt-4"><em>Creators</em></h3>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The <strong>IskoLAr</strong> system was created by a team of dedicated students and professionals who worked together to bring this idea to life. Each member has contributed their unique skills to ensure the system meets the needs of the PUP community.
            <br><br>
            <div class="mt-6 text-center">
            <img src="{{ asset('images/about creators.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
            <strong>Project Creators and Roles:</strong>
            <ul class="list-disc ml-6">
                <li><span class="font-semibold"><strong>John Lawrence Trinidad</strong></span> - Project Manager/ Full-Stack Web Developer</li>
                <li><span class="font-semibold"><strong>Acel Gabrielle Margallo</strong></span> - Lead Full-Stack Web Developer</li>
                <li><span class="font-semibold"><strong>Vanica Lobusta</strong></span> - Full-Stack Web Developer/ UI/UX Designer</li>
                <li><span class="font-semibold"><strong>Trisha Camille Galicia</strong></span> - Full-Stack Web Developer</li>
                <li><span class="font-semibold"><strong>Jermaine Jade De Guzman</strong></span> - UI/UX Designer/Full-Stack Web Developer</li>
                <li><span class="font-semibold"><strong>Miguel Alfonso Neri</strong></span> - Logic Engineer/Developer</li>
                <li><span class="font-semibold"><strong>Juan Miguel Gamo</strong></span> - Logic Engineer</li>
                <li><span class="font-semibold"><strong>Jiro Ivan Ybanez</strong></span> - Logic Engineer</li>
            </ul>
        </p>

        <!-- Subsection 2: User Manual -->
        <h3 class="text-lg font-semibold text-left mt-4"><strong>2. User Manual</strong></h3>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
        The <strong><em>User Manual</em></strong> is your ultimate guide to the proper usage of the <strong><em>IskoLAr</em></strong> system. It contains instructions on how to navigate through the platform, manage folders, upload files, and utilize all the available features securely. If you have questions or need assistance with any function, this guide will help you get started and make the most of the system.
        </p>
        <!-- Section 7: Change Password -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8"><strong>Section 7: Change Password</strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            For security purposes, it's important to regularly change your password to ensure your account remains secure. In this section, you can easily change your password following these steps:
        </p>
        <div class="mt-6 text-center">
            <img src="{{ asset('images/changepass.png') }}" 
                alt="User Manual" 
                class="rounded-lg shadow-md object-contain"
                style="width: 800px; height: auto;">
            </div>
            <br>
        </ul>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <span class="font-bold text-xl mr-2">①</span> <strong>Input Current Password</strong>: Enter your current password to verify your identity. <br>
            <span class="font-bold text-xl mr-2">②</span> <strong>Input New Password</strong>: Create a new password that is strong and unique. <br>
            <span class="font-bold text-xl mr-2">③</span> <strong>Confirm New Password</strong>: Re-enter your new password to confirm it.
        </ul>
        <p class="mt-6 font-semibold text-left"><strong>Change Password Process: Current Password > New Password > Confirm New Password</strong></p>

        <!-- Section 8: Log Out -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8"><strong>Section 8: Log Out</strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            The <strong>Log Out</strong> function is important for securing your account. Always ensure that you log out after using the system, especially if you are accessing it from a public or shared computer.
        </p>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <span class="font-bold text-xl mr-2">①</span> Click the <strong><em>Log Out</em></strong> button to end your session.<br>
            <span class="font-bold text-xl mr-2">②</span> Make sure to close your browser after logging out, especially if you're on a public network.</li>
        </ul>

        <p class="mt-6 font-semibold text-left"><strong>Log Out Function: Click Log Out to Secure Your Account</strong></p>

        <!-- Section 9: Terms of Use and Privacy Statement -->
        <h2 class="text-xl font-bold border-b border-gray-400 pb-2 text-left mt-8"><strong>Section 9: Terms of Use and Privacy Statement</strong></h2>
        <p class="text-gray-700 mt-4 max-w-2xl text-left">
            By using the <strong>IskoLAr</strong> system, you agree to the Terms of Use and Privacy Policy. These documents inform you of the terms and conditions under which the system operates, as well as how your data is handled.
            <br><br>
            Please review the Terms of Use and Privacy Statement thoroughly before continuing to use the system to ensure you understand your rights and responsibilities.
        </p>
        <ul class="mt-6 space-y-2 text-gray-800 text-left">
            <span class="font-bold text-xl mr-2">①</span> <strong>Terms of Use</strong>: Detailed terms that govern your use of the system.<br>
            <span class="font-bold text-xl mr-2">②</span> <strong>Privacy Statement</strong>: Explanation of how your personal and usage data is protected within the system.
        </ul>

        <p class="mt-6 font-semibold text-left"><strong>Review Terms of Use > Privacy Statement</strong></p>

    </div>
</div>
@endsection
