<div class="sticky-top d-flex align-items-center">
    <div class="burger-icon">
        <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
            onclick="burgerToogle()">
            <menu-icon class="burger-icon-data"></menu-icon>
        </button>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="content">
        <div style="text-align: center;">
            <img src="icon/xq.png" class="projectlogo">
        </div><br>
        <div class="gap-1 title-section">
            <h1>Speech-to-Speech ChatBot</h1>
            <hr class="hr2">
        </div>
        <p class="about-section">
            An interactive system that enables real-time AI-driven audio conversations in Bahasa Indonesia. STS creates
            a seamless voice experience with a virtual assistant that can understand and respond to user questions
            through natural conversation.
            <br><br>
            The workflow is similar to Avatar AI but focused on audio-only interactions, converting user speech to text,
            processing through an LLM, and returning AI-generated spoken responses.
        </p>
        <div class="info">
            <div class="label">Role:</div>
            <div class="value">AI Engineer Intern</div>
            <div class="label">Timeline:</div>
            <div class="value">February 2025 - March 2025</div>
            <div class="label">Purpose:</div>
            <div class="value">This is the project I made during my internship at XquisiteAI, Indonesia</div>
            <div class="label">Result:</div>
            <div class="value">Live audio chat</div>
        </div><br>
        <h3>How it works?</h3>
        <img src="image/avatarAI/stsflow.png" class="projectimg" loading="lazy">
        <ol type="1">
            <li><b>Question Input (Audio)</b>: The user asks a question verbally in Bahasa Indonesia.</li>
            <li><b>Speech to Text</b>: The audio question is processed through speech recognition to convert it into
                text format (creating the subtitle).</li>
            <li>
                <b>Embedding</b>: These chunks are transformed into vector embeddings (numerical
                representations that capture
                semantic meaning).
            </li>
            <li><b>Vector Database Storage</b>: The embeddings are stored in a vector database, which enables semantic
                searching.</li>
            <li><b>Semantic Search</b>: When a query is made, the system returns the top 3 most semantically relevant
                answers from the database.</li>
            <li><b>LLM Processing</b>: A Large Language Model processes the unstructured answers into a coherent,
                conversational script.</li>
            <li><b>Text to Speech Output</b>: The system generates an audio response that speaks the answer, creating a
                realistic voice call experience.</li>
        </ol>
        <br>
        <h3 class="text-center">Video Demonstration</h3>
        <iframe src="https://www.youtube.com/embed/iMw0zRL1a2E?si=yHcpIKDcpYEdi_T4" class="projectimg"
            style="aspect-ratio: 3/2;" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <br><br>
        <div class="text-center text-silent text14">
            &#169;<script>
            document.write(new Date().getFullYear())
            </script> Rafi Daffa Ramadhani. All rights reserved.
        </div>
        <br>
    </div>
</div>