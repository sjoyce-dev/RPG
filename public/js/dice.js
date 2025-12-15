document.addEventListener("DOMContentLoaded", () => {
  const dieSelect = document.getElementById("die");
  const rollBtn = document.getElementById("rollBtn");
  const output = document.getElementById("output");
  const meta = document.getElementById("meta");

  async function rollDie(sides) {
    const res = await fetch(`/api/roll.php?sides=${encodeURIComponent(sides)}`, {
      headers: { "Accept": "application/json" },
      cache: "no-store",
    });

    if (!res.ok) {
      const text = await res.text();
      throw new Error(`HTTP ${res.status}: ${text}`);
    }

    return res.json();
  }

  rollBtn.addEventListener("click", async () => {
    const sides = parseInt(dieSelect.value, 10);
    output.textContent = "Rolling…";
    meta.textContent = "";

    try {
      const data = await rollDie(sides);
      output.textContent = `d${data.sides} → ${data.roll}`;
      meta.textContent = `min: ${data.min}, max: ${data.max}, at: ${data.timestamp}`;
    } catch (err) {
      output.textContent = "Error rolling.";
      meta.textContent = String(err.message || err);
    }
  });
});
