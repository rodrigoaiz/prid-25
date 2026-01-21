<?php
class DocumentLinkComponent
{
  public static function render($filePath, $title, $content)
  {
    $truncatedContent = strlen($content) > 150 ? substr($content, 0, 150) . '...' : $content;
    $needsModal = strlen($content) > 150;
    $modalId = 'modal-' . md5($filePath . $title);
?>
    <style>
      .pdf-modal-toggle {
        display: none;
      }
      
      .pdf-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        align-items: center;
        justify-content: center;
        padding: 1rem;
      }
      
      .pdf-modal-toggle:checked + .pdf-modal-overlay {
        display: flex;
      }
      
      .pdf-modal-content {
        background: white;
        padding: 2rem;
        border-radius: 0.5rem;
        max-width: 600px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        margin: auto;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      
      .pdf-modal-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ef4444;
        color: white;
        border-radius: 50%;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.25rem;
        line-height: 1;
        transition: all 0.2s;
        cursor: pointer;
      }
      
      .pdf-modal-close:hover {
        background: #dc2626;
        transform: scale(1.1);
      }

      .pdf-modal-btn {
        cursor: pointer;
      }

      .view-more-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 0.75rem;
        background: transparent;
        color: #93c5fd;
        border: 1px solid #60a5fa;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        font-weight: 400;
        transition: all 0.2s ease;
        cursor: pointer;
      }

      .view-more-btn:hover {
        background: rgba(96, 165, 250, 0.1);
        border-color: #93c5fd;
        color: #bfdbfe;
      }

      .view-more-btn::after {
        content: '📖';
        font-size: 0.875rem;
      }
      
      @media (max-width: 640px) {
        .pdf-modal-content {
          padding: 1.5rem;
          border-radius: 0;
          max-height: 100vh;
        }
        
        .pdf-modal-toggle:checked + .pdf-modal-overlay {
          padding: 0;
        }
      }
    </style>

    <div class="relative">
      <div class="bg-darkown text-bluelightown p-5">
        <div class="flex items-center text-xl gap-4">
          <a class="hover:scale-110 ease-in-out transition-all group" target="_blank" href="<?php echo $filePath; ?>">
            <div class="bg-red-300 group-hover:bg-red-500 ease-in-out transition-all flex items-center justify-center min-h-11 min-w-11 rounded-full">
              <img class="size-6" src="<?php echo PATH_ICONS; ?>filetype-pdf.svg" alt="">
            </div>
          </a>
          <span class="font-bold"><?php echo $title; ?></span>
        </div>
        <p class="mt-3"><?php echo $truncatedContent; ?></p>
        <?php if ($needsModal): ?>
          <label for="<?php echo $modalId; ?>" class="view-more-btn mt-3">    
            Ver más...
          </label>
        <?php endif; ?>
      </div>

      <?php if ($needsModal): ?>
        <input type="checkbox" id="<?php echo $modalId; ?>" class="pdf-modal-toggle">
        <label for="<?php echo $modalId; ?>" class="pdf-modal-overlay">
          <div class="pdf-modal-content" onclick="event.stopPropagation();">
            <label for="<?php echo $modalId; ?>" class="pdf-modal-close">&times;</label>
            <h3 class="text-2xl font-bold mb-4 pr-8 text-gray-800"><?php echo $title; ?></h3>
            <p class="text-gray-700 leading-relaxed mb-6"><?php echo $content; ?></p>
            <div class="flex gap-3 justify-end">
              <label for="<?php echo $modalId; ?>" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded transition-colors text-gray-800 pdf-modal-btn">
                Cerrar
              </label>
              <a href="<?php echo $filePath; ?>" target="_blank" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded transition-colors">
                Abrir PDF
              </a>
            </div>
          </div>
        </label>
      <?php endif; ?>
    </div>
<?php
  }
}
?>
