import tkinter as tk

# Create a Tkinter window
root = tk.Tk()
root.title("Game Panel")

# Configure the window to fit the screen
screen_width = root.winfo_screenwidth()
screen_height = root.winfo_screenheight()
root.geometry(f"{screen_width}x{screen_height}+0+0")

# Create a brown frame to fill the window
brown_frame = tk.Frame(root, bg="#8B4513")
brown_frame.pack(fill=tk.BOTH, expand=True)

# Create a yellow frame inside the brown frame
yellow_frame = tk.Frame(brown_frame, bg="#FDE74C", padx=20, pady=20)
yellow_frame.pack(fill=tk.BOTH, expand=True)

# Create a label with the "Game Panel" heading in a gold-colored box
heading_frame = tk.Frame(yellow_frame, bg="#FFC300", padx=20, pady=10)
heading_frame.pack(pady=50)

heading_label = tk.Label(heading_frame, text="Game Panel", font=("Helvetica", 36, "bold"), fg="#FFFFFF", bg="#FFC300")
heading_label.pack()

# Create a 2x2 grid of buttons in the center of the yellow frame
button_frame = tk.Frame(yellow_frame)
button_frame.pack(expand=True)

for i in range(2):
    for j in range(2):
        button = tk.Button(button_frame, text=f"Button {i*2+j+1}", font=("Helvetica", 24))
        button.grid(row=i, column=j, padx=20, pady=20)

# Start the Tkinter event loop
root.mainloop()
