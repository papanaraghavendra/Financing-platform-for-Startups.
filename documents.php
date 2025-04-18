<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3B82F6;
            --secondary-color: #f8fafc;
            --text-color: #1e293b;
            --light-text: #64748b;
            --border-color: #e2e8f0;
        }
        
        .documents-container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        
        .documents-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2em;
        }
        
        .upload-section {
            background: white;
            padding: 2em;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.03);
            margin-bottom: 2em;
            border: 2px dashed var(--border-color);
            text-align: center;
        }
        
        .upload-btn {
            background: var(--primary-color);
            color: white;
            padding: 1em 2em;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: background 0.2s ease;
        }
        
        .upload-btn:hover {
            background: #2563eb;
        }
        
        .documents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5em;
        }
        
        .document-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.03);
            overflow: hidden;
            transition: transform 0.3s ease;
            border: 1px solid var(--border-color);
        }
        
        .document-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .document-icon {
            height: 120px;
            background: var(--secondary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 3em;
        }
        
        .document-details {
            padding: 1.5em;
        }
        
        .document-name {
            font-weight: 600;
            margin-bottom: 0.5em;
            color: var(--text-color);
        }
        
        .document-meta {
            display: flex;
            justify-content: space-between;
            color: var(--light-text);
            font-size: 0.9em;
            margin-bottom: 1em;
        }
        
        .document-actions {
            display: flex;
            gap: 0.5em;
        }
        
        .action-btn {
            flex: 1;
            padding: 0.5em;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            font-size: 0.9em;
        }
        
        .download-btn {
            background: var(--primary-color);
            color: white;
        }
        
        .delete-btn {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }
    </style>
</head>
<body>
    <div class="documents-container">
        <div class="documents-header">
            <h1>Documents</h1>
            <button class="upload-btn">
                <i class="fas fa-upload"></i> Upload New
            </button>
        </div>
        
        <div class="upload-section">
            <i class="fas fa-cloud-upload-alt" style="font-size: 3em; color: var(--primary-color); margin-bottom: 1em;"></i>
            <h3>Drag and drop files here</h3>
            <p>or</p>
            <input type="file" id="file-upload" style="display: none;" multiple>
            <button class="upload-btn" onclick="document.getElementById('file-upload').click()">
                <i class="fas fa-folder-open"></i> Browse Files
            </button>
            <p style="margin-top: 1em; font-size: 0.9em; color: var(--light-text);">
                Supported formats: PDF, DOCX, XLSX, PPTX (Max 25MB)
            </p>
        </div>
        
        <div class="documents-grid">
            <!-- Document 1 -->
            <div class="document-card">
                <div class="document-icon">
                    <i class="fas fa-file-pdf"></i>
                </div>
                <div class="document-details">
                    <div class="document-name">Pitch Deck.pdf</div>
                    <div class="document-meta">
                        <span>2.4 MB</span>
                        <span>Uploaded: 3 days ago</span>
                    </div>
                    <div class="document-actions">
                        <button class="action-btn download-btn">
                            <i class="fas fa-download"></i> Download
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Document 2 -->
            <div class="document-card">
                <div class="document-icon">
                    <i class="fas fa-file-excel"></i>
                </div>
                <div class="document-details">
                    <div class="document-name">Financial Model.xlsx</div>
                    <div class="document-meta">
                        <span>1.8 MB</span>
                        <span>Uploaded: 1 week ago</span>
                    </div>
                    <div class="document-actions">
                        <button class="action-btn download-btn">
                            <i class="fas fa-download"></i> Download
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Document 3 -->
            <div class="document-card">
                <div class="document-icon">
                    <i class="fas fa-file-word"></i>
                </div>
                <div class="document-details">
                    <div class="document-name">Business Plan.docx</div>
                    <div class="document-meta">
                        <span>3.2 MB</span>
                        <span>Uploaded: 2 weeks ago</span>
                    </div>
                    <div class="document-actions">
                        <button class="action-btn download-btn">
                            <i class="fas fa-download"></i> Download
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Document 4 -->
            <div class="document-card">
                <div class="document-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <div class="document-details">
                    <div class="document-name">Term Sheet.pdf</div>
                    <div class="document-meta">
                        <span>1.5 MB</span>
                        <span>Uploaded: 1 month ago</span>
                    </div>
                    <div class="document-actions">
                        <button class="action-btn download-btn">
                            <i class="fas fa-download"></i> Download
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    document.getElementById('file-upload').addEventListener('change', function(e) {
        if(this.files.length > 0) {
            alert(this.files.length + ' file(s) selected');
            // Here you would typically handle the file upload
            // For example: uploadFiles(this.files);
        }
    });
</script>