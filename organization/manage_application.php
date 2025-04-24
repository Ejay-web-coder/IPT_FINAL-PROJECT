<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Application</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <style>
    /* Hide the default checkbox */
    input[type="checkbox"] {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 18px;
      height: 18px;
      border: 1.5px solid #d1d5db; /* Tailwind gray-300 */
      border-radius: 4px;
      cursor: pointer;
      position: relative;
      vertical-align: middle;
      margin-right: 6px;
      transition: background-color 0.2s, border-color 0.2s;
    }
    /* Checked state */
    input[type="checkbox"]:checked {
      background-color: #34d399; /* Tailwind emerald-400 */
      border-color: #34d399;
    }
    /* Checkmark */
    input[type="checkbox"]:checked::after {
      content: "✔";
      color: white;
      font-size: 14px;
      position: absolute;
      top: 1px;
      left: 3px;
      user-select: none;
    }
  </style>
</head>
<body class="bg-white font-sans">
  <header class="flex items-center justify-start gap-10 px-20 py-8">
    <div class="flex items-center gap-1">
      <span class="font-extrabold text-4xl text-indigo-400 select-none">E</span>
      <span class="font-extrabold text-4xl text-orange-400 select-none">🔍</span>
      <span class="font-extrabold text-4xl text-emerald-400 select-none">C</span>
      <span class="font-extrabold text-4xl text-blue-600 select-none">S</span>
    </div>
    <nav class="flex items-center gap-8 text-base font-normal text-black">
      <a href="#" class="hover:underline">Profile</a>
      <a href="#" class="hover:underline">Post Jobs</a>
      <a href="#" class="hover:underline">Requirements</a>
      <a href="#" class="bg-emerald-400 rounded-md px-4 py-1 text-white hover:bg-emerald-500 transition">Manage Application</a>
      <a href="#" class="hover:underline">Notification</a>
      <a href="#" class="font-bold hover:underline">Logout</a>
    </nav>
  </header>

  <main class="px-20">
    <table class="w-full border border-gray-300 text-sm">
      <thead class="bg-gray-200 text-left text-xs font-semibold text-gray-900">
        <tr>
          <th class="border border-gray-300 px-3 py-2">Student Name</th>
          <th class="border border-gray-300 px-3 py-2">Resume</th>
          <th class="border border-gray-300 px-3 py-2">Application Date</th>
          <th class="border border-gray-300 px-3 py-2">Status</th>
          <th class="border border-gray-300 px-3 py-2">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border border-gray-300 px-3 py-1">Chrisnaire Jake Allado</td>
          <td class="border border-gray-300 px-3 py-1 text-blue-500 flex items-center gap-1">
            <i class="fas fa-paperclip"></i>
            <a href="#" class="hover:underline">View Resume</a>
          </td>
          <td class="border border-gray-300 px-3 py-1">March 30, 2025</td>
          <td class="border border-gray-300 px-3 py-1">Pending</td>
          <td class="border border-gray-300 px-3 py-1 flex items-center">
            <label class="flex items-center cursor-pointer select-none">
              <input type="checkbox" checked />
              <span>Approved</span>
            </label>
          </td>
        </tr>
        <tr>
          <td class="border border-gray-300 px-3 py-1">Chrisnaire Jake Allado</td>
          <td class="border border-gray-300 px-3 py-1 text-blue-500 flex items-center gap-1">
            <i class="fas fa-paperclip"></i>
            <a href="#" class="hover:underline">View Resume</a>
          </td>
          <td class="border border-gray-300 px-3 py-1">March 30, 2025</td>
          <td class="border border-gray-300 px-3 py-1">Pending</td>
          <td class="border border-gray-300 px-3 py-1 flex items-center">
            <label class="flex items-center cursor-pointer select-none">
              <input type="checkbox" checked />
              <span>Approved</span>
            </label>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="flex justify-end gap-4 mt-4">
      <button class="bg-emerald-400 text-white font-bold rounded-full px-5 py-2 hover:bg-emerald-500 transition">
        Approve
      </button>
      <button class="bg-red-400 text-white font-bold rounded-full px-5 py-2 hover:bg-red-500 transition">
        Reject
      </button>
    </div>
  </main>
</body>
</html>