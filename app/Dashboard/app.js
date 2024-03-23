var data = [
["1", "https://source.unsplash.com/random/300x300", "+62 123127", "Bagas"],
["2", "https://source.unsplash.com/random/300x300/?man", "+62 123427", "Raja"],
["3", "https://source.unsplash.com/random/300x300/?human","+62 123216", "Iblis"],
["4", "https://source.unsplash.com/random/300x300/?people", "+62 123127", "Budi"],
["5", "https://source.unsplash.com/random/300x300/?key", "+62 12709", "Hadid"]]

document.getElementById("col-gen").innerHTML = data.reduce((acc, item) => {
    return acc +
        `<tr class="odd:bg-transparent border-b">
          <td scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
            ${item[0]}
          </td>
          <td class="px-6 py-4">
            <img src=${item[1]} class="h-12 w-12 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
          </td>
          <td class="px-6 py-4">
            ${item[2]}
          </td>
          <td class="px-6 py-4">
            ${item[3]}
          </td>
          <td class="px-6 py-4">
            <button id="button-${item[0]}" class="p-1 bg-indigo-600 text-white w-18 border rounded-lg hover:bg-indigo-800">Overview</button>
          </td>
        </tr>`
},"");

function displayContact(id) {
  var contact = data.find(c => c[0] === id);
  if (!contact) return;

  var html = `
        <div class="flex flex-col items-center">
          <img src=${contact[1]} class="mt-7 w-32 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
          <p class="font-semibold text-gray-700 mt-4">${contact[3]}</p>
          <p class="text-sm font-medium text-gray-700">${contact[2]}</p>
        </div>
        <div class="button-action mt-6 flex justify-center flex-col gap-4 font-semibold">
          <button class="text-indigo-600 border-indigo-600 border w-80 h-10 rounded-xl hover:bg-indigo-600 hover:text-white">Call Contact</button>
          <button class="text-yellow-600 border-yellow-600 border w-80 h-10 rounded-xl hover:bg-yellow-600 hover:text-white">Edit Contact</button>
          <button class="text-red-600 border bg-transparent border-red-600 w-80 h-10 rounded-xl hover:bg-red-700 hover:text-white">Delete Contact</button>
        </div>
  `;

  document.getElementById("overview-append").innerHTML = html;
};

for (let i = 1; i <= 5; i++) {
  document.getElementById(`button-${i}`).onclick = function() {
    displayContact(`${i}`);
  };
};